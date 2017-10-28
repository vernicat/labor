<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>Иванов Иван Иванович</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Позиция</p>
			<br>
			<div>
				<p>Студент</p>
				<p>Группа</p>
				<p>КС-43</p>				
			</div>
			<br>
			<div>
				<p>Преподаватель</p>
				<p>Дисциплины</p>
				<div>
					<p>Базы данных</p>
					<p>Компьютерная графика</p>
					<p>Архитектура компьютерных систем</p>
				</div>
				<p>Классные группы</p>
				<div>
					<p>ПОКС-21</p>
					<p>КС-32</p>					
				</div>

			</div>
			<br>
			<div>
				<p>Иной</p>
				<p>Отдел</p>
				<p>Студпрофком</p>
			</div>
		</div>
	</div>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>