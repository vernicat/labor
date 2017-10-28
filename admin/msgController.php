<?
	session_start();

	require_once 'class/messages.class.php';
	require_once 'class/msgDB.class.php';

	$db = new db("localhost", "vernicat", "la1bor2", "fkofte1_labor");

	$toId = $_REQUEST['toId'];
	$myId = $_SESSION['userId'];

	$act = $_REQUEST['act'];
	$msg = $db->escape($_REQUEST['msgText']);

	switch ($act) {
		case 'createDialog':
			$dialog = new Messages($db, time(), $myId, null);
			if(!$toId || !$myId || !$msg) 
				exit("Заполнены не все параметры!");
			else
				$findDialog = $dialog->find_suit_dialog([$toId, $myId])[0]; // смотрим, есть ли у нас диалог с такими людьми
				if($findDialog) { // если есть, то отправляем в него сообщение
					$dialog->hash = $findDialog['hash'];
					$dialog->id = $findDialog['dialogid'];
					return $dialog->send($msg);
				} // если диалога нет - создаём
				$dialog->create();
				$hash = $dialog->hash;
				$dialog->add_users_to_dialog([$toId, $myId]);
				return $dialog->send($msg);
			break;
			case 'sendMsg' :
				$hash = $_POST['hash'] ?? NULL;
				$msg = $_POST['msgText'] ?? NULL;

				$dialog = new Messages($db, time(), $_SESSION['userId'], $hash);

				if($hash && $msg) {
					$b = $dialog->send($msg);
					header("Location: /msg?to=".$hash);
				} else 
					exit("Заполнены не все поля!");
			break;
	}
?>