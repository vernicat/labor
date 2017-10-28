<?php 

	/*ini_set('display_errors','On');
	error_reporting(E_ALL);*/

	require_once 'class/messages.class.php';
	require_once 'class/ui.class.php';
	require_once 'class/sql.class.php';
	require_once 'class/msgDB.class.php';

	$db = new db("localhost", "vernicat", "la1bor2", "fkofte1_labor");
	$SQL = new SQL;
	$UI = new UI;

	require_once 'link.php';

	$tmp = 'tmp/';
	$img = 'img/';

	$icon = $img.'icon/';
	$sticker = $img.'stickers/';

	$header = $icon.'header/';

	$menu_left = $icon.'menu_left/';
	$menu_center = $icon.'menu_center/';

	$icon_msg = $icon.'msg/';
	
	$social = $icon.'social/';

	$dialog = new Messages($db,time(),$userid,isset($_REQUEST['to'])?$_REQUEST['to']:'');
	$hash = $_REQUEST['to'];
// var_dump($icon_msg); 


	$dialogs = $dialog->get_user_dialogs();
	//var_dump($dialogs);

  	//$a = $dialog->create();
  	//var_dump($a);
  	//$dialog->hash = "rd8vVBK9";
  	//$dialog->add_users_to_dialog([4]);
	//$dialog->add_users_to_dialog([99]);
	//var_dump($a);
	//$b = $dialog->send("qqewqwetr");
	//var_dump($b);
?>
<div id="left">
	<div class="top">
		<input type="text" name="" placeholder="Поиск">
	</div>
	<div class="middle">
		<?
		foreach($dialogs as $dg) {
  		?>
  		<div class='dialog_with_button'>
			<div class='buttonAction'>
				<button name='deleteDialog' value="<?=$dg['hash']?>"><img alt='' src="<?=$icon_msg?>clear-button.png"></button>
			</div>
	  		<a href="/msg?to=<?=$q?>">
		  		<div class="dialog <?=(!$dg['msg_status']?'newmsg':'')?>" data-msgid='<?=$dg['hash']?>'>
					<img alt='' src="<?=$img?>Avatar_rksi.png">
					<!-- <? $q=$dg['hash']?> -->
					<div class='info' >
						<div class='info-top'>
							<h3 data-userId="<?=$dg['senderid']?>"><?=$dg['sender_name']?></h3>
							<p><?=date('H:i',$dg['public'])?></p>
						</div>
						<p><?=$dg['message']?></p>
					</div>
				</div>
			</a>  			
  		</div>

  		<? } ?>
	</div>
</div>

<div id="right">
<?
	if(!$hash) { // если не открыт диалог
		echo "<div class=\"selectDialog\">Выберите диалог.</div>";
	} else {
?>
	<div class="top">
		<h3>Иван Петров</h3>
		<dir class="dialog-top-right">
			<div class='allButtonAction'>
				<div class='dot3'></div>
				<menu class='buttonAction'>
					<li name='addUser' value="435">Добавить собеседника</li>
					<li name='renameChat' value="345">Изменить название беседы</li>
					<li name='leave' value="345">Покинуть беседу</li>
				</menu>
			</div>
			<div class='info' >
				<button name='deleteFromChat' value="432"><img alt='' src="<?=$img?>Avatar.png"></button>
			</div>
			
			<!-- <a href="/id<?=$msg['senderid']?>"><img alt='' src="<?=$img?>Avatar.png"></a> -->
		</dir>
	</div>
	<dir id='block' class='middle'>
		<div id='sticker'>
			<img alt='' src="<?=$sticker?>first/problem.png">
			<img alt='' src="<?=$sticker?>first/PS1.png">
			<img alt='' src="<?=$sticker?>first/PS2.png">
			<img alt='' src="<?=$sticker?>first/problem.png">
			<img alt='' src="<?=$sticker?>first/PS1.png">
			<img alt='' src="<?=$sticker?>first/PS2.png">
			<img alt='' src="<?=$sticker?>first/problem.png">
			<img alt='' src="<?=$sticker?>first/PS1.png">
			<img alt='' src="<?=$sticker?>first/PS2.png">
			<img alt='' src="<?=$sticker?>first/problem.png">
			<img alt='' src="<?=$sticker?>first/PS1.png">
		</div>
		<div class='karabas'>
			<?
				$cnt = $dialog->get_new_messages_cnt();
				//var_dump($cnt);
				$messages = (!$cnt) ? [] : $dialog->get_messages_from_dialog();
				$out = '';
				foreach($messages as $msg){
			?>
			<div class='message <?=($msg['senderid'] == $_SESSION['userId'] ? "right" : "")?>'>
				<a href="/id<?=$msg['senderid']?>"><img alt='' src="<?=$img?>Avatar.png"></a>
				<p><?=$msg['message']?></p>
				<p><?=date('H:i:s:D',$msg['public'])?></p>
			</div>
			<? } ?>
		</div>
	</dir>
	<div class="bottom">
		<form action="sendMsg">
			<input type="text" name="msgText"/>
			<button name="sendMsg" value="<?=$hash?>">Отправить</button>
			<img alt='' src="<?=$icon_msg?>smile_icon.png" id='smile'>
		</form>
	</div>
	<?
		} // если открыт диалог
	?>
</div>


<script type="text/javascript">
	var block = document.getElementById("block");
	// block.scrollTop = block.scrollHeight;
	// block.scrollTo(0, document.block.scrollHeight);
	// $(window).scrollTop($('document').height());
</script>
<?php
	$UI->bottom();
?>