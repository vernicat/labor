<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>Информационные технологии</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Заведующая кафедрой</p>
			<p>Шлюпкина Алла Ильинична</p>
			<p>Номер телефона</p>
			<p>245-23-54</p>
			<p>Прикрепленные специальности</p>
			<div>
				<p>ПОКС</p>
				<p>ПИ</p>
				<p>ИБ</p>
				<p>КС</p>
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