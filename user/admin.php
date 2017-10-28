<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>Петров Петр Петрович</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Хз</p>
		</div>
	</div>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>