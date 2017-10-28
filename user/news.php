<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<?php
		// ПОВТОРЯЕТСЯ КОД
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', explode('/', $url)[1])[0];
		if ($url == '')
			$url = 'news';
		// var_dump($url);
		$db = 'db/db_'.$url.'.php';
		require_once $db;
		while($data = mysql_fetch_array($result)) {
	?>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p><?=$data[1]?></p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p><?=$data[2]?></p>
			<img src="img/gradient.png">
		</div>
	</div>
	<?php }; ?>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>