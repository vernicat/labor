<div id='dialog'>
	<div class="dialog-overlay"></div>
	<div class='dialog-center'>
		<div class="dialog-content">
			<button class='closeDialog'>Закрыть</button>
			<section class='add'>
				<h2>Добавление</h2>
				<?php require "dialog_form.php"; ?>
			</section>
			<section class='edit'>
				<h2>Редактирование</h2>
				<?php require "dialog_form.php"; ?>
			</section>
			<section class='delete'>
				<h2>Удаление</h2>
				<form autocomplete="on" method="post" class='center'>
					<p>Вы уверены, что хотите удалить запись?</p>
					<button>Да, удалить</button>
				</form>
			</section>
		</div>
	</div>
</div>