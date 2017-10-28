<?php 
	require_once 'class/ui.class.php';
	require_once 'class/user.class.php';
	$UI = new UI;
	$user = new User;
	$url = str_replace("/", '', str_replace(".php", "", $_SERVER['SCRIPT_NAME']));
	$data = $user->search(["query" => $_REQUEST['query']]);
	// var_dump($data);
?>

<div id='content' class='center'>
<main id='<?=$url?>'>
<div class="content-left">
	<p>Параметры поиска</p>
	<div class='table'>
		<label>Позиция</label>
		<select>
			<option selected>Выбор позиции</option>
			<option>Студент</option>
			<option>Преподаватель</option>
			<option>Иной</option>
		</select>
		<label>Специальность</label>
		<select>
			<option selected>Выбор специальности</option>
			<option>ПОКС</option>
			<option>КС</option>
			<option>МТ</option>
		</select>
		<label>Отдел</label>
		<select>
			<option selected>Выбор отдела</option>
			<option>Учебный отдел</option>
			<option>Студпрофком</option>
			<option>Отделение</option>
		</select>
	</div>
</div>

<div class="content-right">
	<div class='info'>
		<p>Найдено: 162</p>
<!-- 		<div>
			<p>Сортировать по:</p>
			<select>
				<option>рейтингу</option>
				<option>фамилии</option>
			</select>
		</div> -->
	</div>
	<div class='search-content'>
		<form action="search" method="get">
			<input type="search" name="query" placeholder="Поиск">
			<!-- <button>Искать</button> -->
		</form>
		<div class='table'>
			<?
			$data = json_decode($data, true)['response'];
			for ($i=0, $l = sizeof($data); $i < $l; $i++) { 
				$d = $data[$i];
			?>
			<section>
				<div class='info'>
					<img alt='' src="img/Avatar_rksi.png">
					<div class='middle'>
						<h3><a href="/id<?=$d['id_user']?>"><?=$d['firstName']." ".$d['surName']?></a></h3>
						<p>Рейтинг: 73 место (350 баллов)</p>				
					</div>
				</div>
				<?
				if ($d['id_user'] != $_SESSION['userId']) {
				?>
				<button name='createDialog' value='<?=$d['id_user']?>' type="button">Написать</button>
				<? } ?>

			</section>
			<? } ?>
		</div>
	</div>
</div>
</main>
</div>
<?php
	$UI->bottom();
?>