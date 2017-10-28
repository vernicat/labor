<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>Базы данных</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Специальности (не надо)</p>
			<div>
				<p>Программирование в компьютерных системах (4 семестр)</p>
				<p>Прикладная информатика (6 семестр)</p>
				<p>Информационная безопасность (5 семестр)</p>	
			</div>
			<p>Преподаватели</p>
			<div>
				<p>Кротенко Елена Михайловна</p>
				<p>Кротенко Елена Михайловна</p>
				<p>Кротенко Елена Михайловна</p>				
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