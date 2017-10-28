<div id='dialog'>
	<div class='dialog-center'>
		<div class="dialog-overlay"></div>
		<div class="dialog-content">

		<div class='main msg'>
			
		<? if ($url == 'msg') { ?>

		<div id='addUser' class='display'>
			<div class='dialog-header'>
				<p>Добавить собеседника</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<form method="post" action="addUser">
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
					<div class='person'>
						<label class='spin'>
							<input type="checkbox" name="check[]" value='1'>
							<span></span>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</label>
					</div>
				</form>
				<button form='sendMsg' name='<?=$d['id_user']?>'>Добавить</button>				
			</div>
		</div>

		<div id='renameChat' class='display'>
			<div class='dialog-header'>
				<p>Изменение названия</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<form action="renameChat">
					<p>Новое название беседы</p><input type="text" name="nameChat" value="Котики">
				</form>
				<button value="234">Изменить</button>				
			</div>
		</div>

		<div id='leave' class='display'>
			<div class='dialog-header'>
				<p>Удаление</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<p>Вы уверены, что хотите покинуть беседу?</p>
				<button value="234">Да, уверен</button>				
			</div>
		</div>

		<div id='deleteChat' class='display'>
			<div class='dialog-header'>
				<p>Удаление</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<p>Вы уверены, что хотите удалить беседу?</p>
				<button name='deleteChat' value="234">Да, уверен</button>				
			</div>
		</div>

		<div id='openInfo' class='display'>
			<div class='dialog-header'>
				<p>Информация о беседе</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<form method="post" action="deleteFromChat">
					<div class='person'>
						<div class='info'>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</div>
						<button value="1">Удалить</button>
					</div>
					<div class='person'>
						<div class='info'>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</div>
						<button value="2">Удалить</button>
					</div>
					<div class='person'>
						<div class='info'>
							<img alt='' src="img/Avatar_rksi.png">
							Иван Иванов
						</div>
						<button value="3">Удалить</button>
					</div>	
				</form>
			</div>			
		</div>

		<? } if ($url == 'search' || $url == 'account') { ?>

		<div id='createDialog' class='display'>
			<div class='dialog-header'>
				<p>Новое сообщение</p>
				<button class='closeDialog'>Закрыть</button>
			</div>
			<div class='dialog-main'>
				<img alt='' src="img/Avatar_rksi.png">
				Иван Иванов
				<form action="createDialog">
					<textarea name="msgText" autofocus></textarea>
				</form>
				<button value="<?=$d['id_user']?>">Отправить</button>
			</div>
		</div>
		<? } ?>
		</div>


		<div class='callback'>
			<p>Сообщение отправлено</p>
		</div>

		</div>
	</div>
</div>