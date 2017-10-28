<?php
require_once 'class/news.class.php';
$news = new News();

require_once 'class/ui.class.php';
$UI = new UI;

// switch ($_GET['act']) {
// 	case 'createNews':
// 		$newsTitle = $_POST['newsTitle'];
// 		$newsText = $_POST['newsText'];
// 		$news->create([$newsTitle,$newsText]);
// 		header("Location: news");
// 		break;
// 	case 'deleteNews':
// 		$deleteNews = $_POST['deleteNews'];
// 		$news->delete([$deleteNews]);
// 		header("Location: news");
// 		break;
// }
?>
<form id='add' action="create" method="post">
	<input type="text" name="newsTitle" placeholder="Заголовок (кратко)" maxlength="80" required>
	<input type="text" name="newsText" placeholder="Введите текст" required>
	<div class='add-bottom'>
		<div class='attachment'>
			<div class="file-upload">
				<label>
				  <input type="file" name='newsFile'>
				  <!-- <span>Выбрать файл</span> -->
				  <img alt='' src="img/icon/main/icon-foto.png">
				</label>
			</div>
			<input type="text" id="filename" class="filename" disabled>
		</div>
		<button>Опубликовать</button>			
	</div>
</form>

<div class='content'>
<?
$get = $news->get();
for($i = 0, $l = sizeof($get); $i < $l; $i++) {
	$d = $get[$i];
	$date = date('j F в H:i', $d['newsDate']);
?>
<section class='entry'>
	<div class='buttonAction'>
		<button name='delete' value="<?=$d['id_news'];?>"><img alt='' src="img/icon/msg/clear-button.png"></button>
	</div>
	<div class='info'>
		<div class='title'>
			<h3><?=$d['newsTitle'];?></h3>
			<p><?=$date?></p>
		</div>
		<div class='qwe'>
			<div>
				<div class='text three'>
					<p><?=$d['newsText'];?></p>
				</div>
				<img alt='' src="img/news.png">			
			</div>
			<div class='bottom'>
				<button value="<?=$d['id_news'];?>" name='page'>Подробнее</button>			
			</div>			
		</div>

	
	</div>
</section>
<?php } ?>
</div>
<?php
	$UI->bottom();
?>