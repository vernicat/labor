<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>ПОКС</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Полное наименование</p>
			<p>Программирование в компьютерных системах</p>
			<p>Начало обучения</p>
			<p>2007</p>
			<p>Длительность обучения</p>
			<p>4 года (2010)</p>
			<p>Отделение</p>
			<p>Информационные технологии</p>
		</div>
	</div>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>