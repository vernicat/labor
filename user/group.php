<?php
	require_once 'ui.class.php';
	$UI = new UI;
?>
<div id='table'>
	<div class="details">
		<div class="details-summary">
			<div class="left">
				<p>ПОКС-41</p>
			</div>
			<div class='right'>
				<img alt='' src="icon/edit.png" class='openDialogEdit'>
				<img alt='' src="icon/delete.png" class='openDialogDelete'>
			</div>
		</div>
		<div class='details-content'>
			<p>Специальность</p>
			<p>Программирование в компьютерных системах</p>
			<p>Начало обучения</p>
			<p>2007</p>
			<p>Конец обучения</p>
			<p>2010 (4 года)</p>
			<p>Классный руководитель</p>
			<p>Кротенко Елена Михайловна</p>
		</div>
	</div>
	<div id='table-page'>
		<?php require_once "pages.php" ?>
	</div>
</div>
<?php
	$UI->bottom();
?>

<!--
RewriteCond %{REQUEST_URI} ^/collage$
RewriteRule ^.*$ http://diplom.vernicat.ru/collage/group? [R=301,L]

RewriteRule ^theme/([0-9]+)$ theme.php?tId=$1 [QSA,L]
-->