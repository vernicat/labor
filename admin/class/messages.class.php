<?php
	
	/*ini_set('display_errors','On');
	error_reporting(E_ALL);*/

	include_once 'sql.class.php';
	class Messages extends SQL{

	public $utime = 0;
	public $userid = 0;
	public $err = '';
	public $hash = '';
	public $id = '';
	private $user_table = 'user';
	private $user_id_field = 'id_user';
	private $user_image_field = 'image';

	function __construct($db,$utime,$userid,$hash = ''){
		$this->userid = $_SESSION['userId'];
		$this->db = $db;
		$this->utime = $utime;
		$this->err = '';
		$this->hash = $hash;
		$this->exists() or $this->hash='' ;
	}
	function exists(){
		return ($this->hash and $this->id = $this->db->exists('dialog', $this->db->escape($this->hash), 'hash', '', 'id')) ;
	}	
	function _genhash ($length = 8){
		$password = "";
		$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
		$maxlength = strlen($possible);
		if ($length > $maxlength) {
			$length = $maxlength;
		}
		$i = 0; 
		while ($i < $length) { 
			$char = substr($possible, mt_rand(0, $maxlength-1), 1);
			if (!strstr($password, $char)) { 
				$password .= $char;
				$i++;
			}
		}
		return $password;
	}
	private function _trim($text){
		return preg_replace( array('#^[\s\n\r]+#u','#[\s\n\r]+$#u'),'',$text );
	}
	private function _ekran( $text ){
		$text = strip_tags($text);
		$text = nl2br($text);
		$this->images = array();
		preg_match_all('#\[img\]([^\]]*)\[/img\]#Uusi',$text,$images);
		$text = preg_replace_callback('#\[img\]([^\]]*)\[/img\]#Uusi',function($match){
			return md5($match[0]);
		},$text);
		$text = preg_replace(array('#(http://[^$\s\r]+)($|[\s\r\n])#Uusi'),array('<a target="_blank" rel="nofollow" href="$1">$1</a>$2'),$text);
		foreach($images[0] AS $k=>$tx){
			$text = str_replace(md5($tx),'<img src="'.$images[1][$k].'"/>',$text);
		}
		return $this->_trim($text);
	}
	public function create(){
		//$res = 0;
		do {
			$this->hash = $this->_genhash();
		} while($this->db->exists('dialog', $this->hash, 'hash'));
		$a = $this->db->insert('dialog', array('public' => $this->utime, 'hash' => $this->hash, 'userid' => $this->userid));
		$this->id = $this->db->insertid();
		return true;
	}

	public function find_suit_dialog($userlist = []){
		if( !$this->id and (!$this->hash or !($this->id = $this->db->exists('dialog', $this->db->escape($this->hash), 'hash', '', 'id'))) ){
			$dlgs = $this->db->getRows('SELECT COUNT(utd.userid) AS cnt, utd.dialogid, dg.hash FROM user_to_dialog AS utd LEFT JOIN dialog AS dg ON dg.id = utd.dialogid  WHERE utd.dialogid IN (SELECT dialogid FROM user_to_dialog WHERE userid = '.intval($userlist[0]).' AND dialogid IN(SELECT dialogid FROM user_to_dialog WHERE userid='.$this->userid.')) group by utd.dialogid;');
		};
		return $dlgs;
	}
	function get_new_messages_cnt(){
		$cnt = $this->db->getRow('SELECT COUNT(id) AS cnt FROM message_to_user WHERE userid='.$this->userid.' and status=0');
		return $cnt['cnt'];
	}
	function get_users_from_dialog(){
		$users = $this->db->getRows('SELECT userid FROM user_to_dialog WHERE dialogid = '.$this->id,'userid');
		return $users;
	}
	function get_user_dialogs( $start = 0, $cnt = 10 ){
		$sql = ' FROM message AS msg LEFT JOIN '.$this->user_table.' AS user ON user.'.$this->user_id_field.' = msg.senderid LEFT JOIN dialog AS dg ON dg.id = msg.dialogid LEFT JOIN message_to_user AS m2u ON (m2u.messageid = msg.id AND m2u.userid = '.$this->userid.') WHERE msg.dialogid IN (SELECT id FROM dialog WHERE id IN (SELECT dialogid FROM user_to_dialog WHERE userid = '.$this->userid.'))';
		$messages = $this->db->getRows('SELECT * FROM(SELECT dg.hash, msg.*, msg.public AS messageId, user.firstName AS sender_name, m2u.status AS msg_status '.$sql.') AS bg GROUP BY bg.dialogid ORDER BY messageId DESC LIMIT '.$start.','.$cnt);
		return $messages;
	}
	function get_messages_from_dialog($new = false, $reset_status = true){
		$messages = array(); $filter = !$new?'':' mtu.status=0 and ';
		if( $this->id or ($this->hash and $this->id = $this->db->exists('dialog',$this->db->escape($this->hash),'hash','','id')) ){
			$sql = ' FROM message AS msg LEFT JOIN '.$this->user_table.' AS user ON user.'.$this->user_id_field.'=msg.senderid  LEFT JOIN message_to_user AS mtu ON mtu.userid='.$this->userid.' and mtu.messageid=msg.id WHERE '.$filter.' msg.dialogid='.$this->id.' and msg.dialogid IN (SELECT id FROM dialog WHERE id IN (SELECT dialogid FROM user_to_dialog WHERE userid='.$this->userid.')) ';
			$full_cnt = $this->db->getRow('SELECT COUNT(msg.id) AS cnt '.$sql.' group by msg.dialogid','cnt'); //order by msg.dialogid desc,msg.public desc
			$messages = $this->db->getRows('SELECT mtu.status, msg.*,user.firstName AS sender_name '.$sql.' order by msg.public asc');
			foreach($messages AS $key=>$msg)
				$reset_status and $this->db->update('message_to_user', ['status'=>1], 'messageid ='.$msg['id'].' and userid='.$this->userid);
		}else
			$this->err = 'Диалог не найден';
		return $messages;
	}
	function remove_users_from_dialog( $userlist = array() ){
		if( $this->id or ($this->hash and isset($userlist) and is_array($userlist) and $this->id = $this->db->exists('dialog',$this->db->escape($this->hash),'hash',' and userid = '.$this->userid,'id')) ){
			foreach($userlist AS $userid){
				if( intval($userid)!=$this->userid ){
					if($this->db->exists('user_to_dialog',intval($userid),'userid','and dialogid='.$this->id)){
						if(($this->db->getRow('SELECT COUNT(id) AS cnt FROM user_to_dialog WHERE userid<>'.$this->userid.' and dialogid='.$this->id,'cnt'))>1){
							$this->db->delete('user_to_dialog','userid='.intval($userid).' and dialogid='.$this->id);
						}else{ 
							$this->err = 'В диалоге должен быть по крайней мере один пользователь';	
							break; 
						}
					}
				}else{
					$this->err = 'Вы не можете удалить себя из своего диалога';	
					break; 
				}
			}
		}else 
			$this->err = 'Диалог не найден';
		return $this->err=='';
	}
	function add_users_to_dialog( $userlist = [] ){
		if( $this->id or ($this->hash and isset($userlist) and is_array($userlist) and $this->id = $this->db->exists('dialog', $this->db->escape($this->hash), 'hash', 'and userid = '.$this->userid, 'id')) ){
			foreach($userlist AS $userid){
				if($this->db->exists('user_to_dialog',intval($userid),'userid','and dialogid='.$this->id))continue; // если пользователь уже в диалоге
					$this->db->insert('user_to_dialog',array('dialogid'=>$this->id,'userid'=>intval($userid)));
			}
		}else
			$this->err = 'Диалог не найден';
		return $this->err;
	}
	function send($msg,$intro = false){
		$this->send_many_users($msg, $this->get_users_from_dialog(), $intro);
	}
	function send_many_users($msg, $userlist, $intro = false){
		$message = !$intro ? $this->_ekran($msg) : $msg;
		if(mb_strlen($message) > 0){
			$this->find_suit_dialog($userlist);
			if($this->db->exists('user_to_dialog',$this->userid,'userid','and dialogid='.$this->id)){
				$this->db->insert('message',array('senderid'=>$this->userid,'message'=>$message,'public'=>$this->utime,'status'=>0,'dialogid'=>$this->id));
				$messageid = $this->db->insertid();
				if( isset($val['attaches'])and(is_array($val['attaches'])) ){
					foreach($val['attaches'] AS $attach){
						if($this->db->exists('attach',$attach)){
							$this->db->insert('attach_to_message',array('messageid'=>$messageid,'attachid'=>$attach));
						}
					}
				}
				$users = $this->db->getRows('SELECT userid FROM user_to_dialog WHERE dialogid='.$this->id); // под вопросом, нужно ли добавлять отправителю сообщение
				foreach($users AS $user){
					$this->db->insert('message_to_user',array('messageid'=>$messageid,'userid'=>$user['userid'])); // для опопвещения юзера о непрочитанных сообщениях
				}
			}else
				$this->err =  'Вы не можете участвовать в данном диалоге';
		}else
			$this->err  = 'Слишком короткое сообщение';
		return $this->err=='';
	}
	public function delete_message( $messageid ){
		if( intval($messageid) and $id=$this->db->exists('message',intval($messageid))){
			$cnt = $this->db->getRow('SELECT COUNT(id) AS cnt FROM message WHERE id='.intval($messageid).' and (senderid='.$this->userid.' or id IN (SELECT messageid FROM message_to_user WHERE userid='.$this->userid.'))','cnt');
			if($cnt){
				$this->db->delete('message','id='.intval($messageid));
				$this->db->delete('message_to_user','messageid='.intval($messageid));
			}else 
				$this->err = 'Не найдено ни одного сообщения!';
		}else  
			$this->err = 'Не найдено ни одного сообщения!';
		return $this->err=='';
	}
}
