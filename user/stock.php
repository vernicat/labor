<?php
	// ini_set('display_errors','On');
	// error_reporting('E_ALL');

	require_once 'ui.class.php';
	$UI = new UI;

?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>Заголовок</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Бесплатно:</p>
			<p>Да (лучше наглядно)</p>
			<p>Категория:</p>
			<p>Кино</p>
			<p>Начало</p>
			<p>12 мая 2017г.</p>
			<p>Конец</p>
			<p>20 апреля 2017г.</p>
		</div>
	</div>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>