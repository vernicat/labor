<form class='center' action='send' name='news' method="post">
	<?php $er ?>
	<input type="text" name="newsTitle" placeholder="Заголовок" value="<?=$er?>">
	<input type="text" name="newsText" placeholder="Текст" value="<?=$er?>">
	<input type="file" name="newsImg" accept="image/*" value="<?=$er?>">
	<button>Добавить</button>
	<button>Редактировать</button>
</form>

<form class='center' action='send' name='stock'>
	<input type="text" name="stockText" placeholder="Текст (кратко)">
	<input type="text" name="stockText" placeholder="Текст (условия)">
	<label><input type="checkbox"/>Бесплатно</label>
	<div class='selection'>
		<p>Категория</p>
		<select>
			<option selected disabled>Выберите категорию</option>
			<option value=''>Кино</option>
			<option value=''>Еда</option>
		</select>
	</div>
	<div class='selection'>
		<p>Начало</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26">
		</div>
	<div class='selection'>
		<p>Конец</p>
		<input type="date" value="2017-05-20" min='2017-05-26' max="2017-06-28">
	</div>
	<button>Добавить</button>
	<button>Редактировать</button>	
</form>

<form class='center' action='send' name="event">
	<input type="text" name="" placeholder="Заголовок (кратко)">
	<input type="text" name="stockText" placeholder="Текст (условия)">
	<div class='selection'>
		<p>Баллы</p>
		<input type="number" value="30" step="5">
	</div>
	<div class='selection'>
		<p>День</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26">
	</div>
	<p>Прием заявок</p>
	<div class='selection'>
		<p>Начало</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26">
	</div>
	<div class='selection'>
		<p>Конец</p>
		<input type="date" value="2017-05-20" min='2017-05-26' max="2017-06-28">
	</div>
	<button>Добавить</button>
	<button>Редактировать</button>	
</form>

<!-- Колледж -->

<div>
	<form class='center' action='send' name="schedule">
		<input type="file" name="" accept="">	
		<button>Добавить</button>
	<button>Редактировать</button>	
</form>

	<form class='center' action='send' name="division">
		<input type="text" placeholder="Текст">	
		<button>Добавить</button>
	<button>Редактировать</button>	
</form>

	<form class='center' action='send' name="discipline">
		<input type="text" placeholder="Текст">
		<button>Добавить</button>
	<button>Редактировать</button>	
</form>

	<form class='center' action='send' name="speciality">
		<input type="text" placeholder="Текст">
		<button>Добавить</button>
	<button>Редактировать</button>	
</form>
</div>

<form class='center' action='send' name="group">
	<select>
		<option selected disabled>Выберите специальность</option>
		<option value=''>ПОСК</option>
		<option value=''>КС</option>
		<option value=''>БД</option>
	</select>
	<p>Год начала обучения</p>
	<input type="number" value="<?php echo date('Y') ?>" min='2013' max='<?php echo date('Y') ?>'>
	<p>Длительность обучения</p>
	<input type="number" value="4">
	<p>Количество групп</p>
	<input type="number" value="3">
	<h5>Выбор классного руководителя (кол-во групп автоматом)</h5>
	<p>Группа 1</p>
	<select>
		<option selected disabled>Выберите</option>
		<option value=''>Кротенко Елена Михайловна</option>
		<option value=''>Жабинская Ирина Николаевна</option>
	</select>
	<p>Группа 2</p>
	<select>
		<option selected disabled>Выберите</option>
		<option value=''>Кротенко Елена Михайловна</option>
		<option value=''>Жабинская Ирина Николаевна</option>
	</select>
	<p>Группа 3</p>
	<select>
		<option selected disabled>Выберите</option>
		<option value=''>Кротенко Елена Михайловна</option>
		<option value=''>Жабинская Ирина Николаевна</option>
	</select>
	<button>Добавить</button>
	<button>Редактировать</button>	
</form>	


<!-- Управление -->

<form class='center' action='send' name="user">
	<input type="text" placeholder="Фамилия">
	<input type="text" placeholder="Имя">
	<input type="text" placeholder="Отчество">
	<select onchange="return changePosition(this.options[this.selectedIndex].value);">
		<option selected disabled>Выберите позицию</option>
		<option value='1'>Студент</option>
		<option value='2'>Препод</option>
		<option value='3'>Иной</option>
	</select>

	<div id='user_student'>
		<select>
			<option selected disabled>Выберите группу</option>
			<option value=''>ПОКС-11</option>
			<option value=''>ИБ-11</option>
			<option value=''>БД-11</option>
		</select>		
	</div>
	<div id='user_teacher'>
		<div id='teacher_classGroup'>
			<select>
				<option selected disabled>Выберите классную группу</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите классную группу</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
		</div>
		<div id='teacher_Discipline'>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
			<select>
				<option selected disabled>Выберите дисциплину</option>
				<option value=''>ПОКС-11</option>
				<option value=''>ИБ-11</option>
				<option value=''>БД-11</option>
			</select>
			<button>ДДобавить еще одну</button>
		</div>
	</div>	
	<div id='user_other'>
		<select>
			<option selected disabled>Выберите отдел</option>
			<option value=''>мероприятия</option>
			<option value=''>новости</option>
			<option value=''>учебный отдел</option>
			<option value=''>профком</option>
		</select>		
	</div>
	<button>Добавить</button>
	<button>Редактировать</button>	
</form>

<!-- <h3>Администраторы (поиск)</h3> -->