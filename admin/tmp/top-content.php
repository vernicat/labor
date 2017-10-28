<?
	$user = new User();
	$userId = $_REQUEST['userId'] ?? $_SESSION['userId'];
	$d = json_decode($user->get(["userId" => $userId]), true)['response'][0];

	switch ($_POST['act']) {
	case 'uploadPhoto':
		$userfile = $_POST['userfile'];
		$user->uploadPhoto($userfile);
		// $news->create([$newsTitle,$newsText]);
		// header("Location: news");
		break;
	}

	// var_dump($_SERVER);
?>
<div id='img'><!-- <img alt='' src="img/gradient.png"> --></div>

<div id='content'>
	<div  class='center'>
		<div class='content-left'>
			<div class='content-top'>
				<img alt='' src="img/Avatar.png">
				<div id='qwe'>
					<div class='circle'>
					<form action="tmp/top-content.php?act=uploadPhoto" method="post" >
						<input type="file" name="userfile">
						<button></button>
						<a>Изменить фотографию</a>
					</form>
					</div>
				</div>

			</div>
			<div class='content-bottom'>
				<menu>
					<li><a href="/id<?=$_SESSION['userId']?>"><img alt='' src="<?=$menu_left?>1.png">Мой профиль</a></li>
					<li><a href="msg"><img alt='' src="<?=$menu_left?>2.png">Мои сообщения</a></li>
					<li><a href="achieve"><img alt='' src="<?=$menu_left?>4.png">Мои достижения</a></li>
					<li><a href="settings"><img alt='' src="<?=$menu_left?>5.png">Настройки</a></li>
				</menu>
			</div>
		</div>
		<div class="content-right">
			<div class='content-top'>
				<div id='info'>
					<div class='name'>
						<p><?=$d['firstName'] . " " . $d['surName']?></p>
					</div>
					<?
					if ($d['id_user'] != $_SESSION['userId']) {
					?>
					<button name='sendMsg'>Написать сообщение</button>
					<? } ?>
				</div>
				<menu>
					<li class='openMenu'><img alt='' src="img/icon/menu_center/menu.png"></li>
					<li><a href="news"><img alt='' src="<?=$menu_center?>1.png"><p>Новости</p></a></li>
					<li><a href="stock"><img alt='' src="<?=$menu_center?>1.png"><p>Акции</p></a></li>
					<li><a href="event"><img alt='' src="<?=$menu_center?>1.png"><p>Мероприятия</p></a></li>
				</menu>
			</div>
			<div class='content-bottom'>
				<main id='<?=$url?>'>