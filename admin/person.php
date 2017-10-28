<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Labor | Персонализация</title>
	<link rel="stylesheet" type="text/css" href="style/person.css">
	<script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src='script/main.js'></script>
</head>
<body>
	<header>
		<div class='center'>
			<img src="img/icon/header/logo.png">
			<p>Персонализация</p>		
		</div>

	</header>
	<main id='person' class='center' >
		<form action='send' name="user" method="post">
			<input type="text" name='lastName' placeholder="Фамилия">
			<input type="text" name="firstName" placeholder="Имя">
			<input type="text" name="secondName" placeholder="Отчество">
			<select name='position' onchange="return changePosition(this.options[this.selectedIndex].value);">
				<option selected disabled>Выберите позицию</option>
				<option value='1'>Студент</option>
				<option value='2'>Преподадатель</option>
				<option value='3'>Сотрудники</option>
			</select>

			<div id='user-student' class='two'>
				<select name="user_student_specialty">
					<option selected disabled>Выберите специальность</option>
					<option value='1'>ПОКС</option>
					<option value='2'>ИБ</option>
					<option value='3'>БД</option>
				</select>
				<select name="user_student_number">
					<option selected disabled>Выберите номер группы</option>
					<option value='1'>11</option>
					<option value='2'>12</option>
					<option value='3'>21</option>
				</select>				
			</div>
			<div id='user-teacher'>
				<div id='teacher-classGroup'>
					<h3>Классные группы</h3>
					<div class='two'>
						<div class='teacher-classGroup-select'>
							<select name="teacher_classGroup_select_specialty">
								<option selected disabled>Выберите специальность</option>
								<option value='1'>ПОКС</option>
								<option value='2'>ИБ</option>
								<option value='3'>БД</option>
							</select>
							<select name="teacher_classGroup_select_number">
								<option selected disabled>Выберите номер группы</option>
								<option value='1'>11</option>
								<option value='2'>12</option>
								<option value='3'>21</option>
							</select>
						</div>					
					</div>
					<button type='button'>Добавить еще</button>
				</div>
				<div id='teacher-discipline'>
					<h3>Дисциплины</h3>
					<select name="teacher-discipline">
						<option selected disabled>Выберите дисциплину</option>
						<option value='1'>Базы данных</option>
						<option value='2'>Информатика</option>
						<option value='3'>Архитектура компьютерных систем</option>
					</select>
					<button type='button'>Добавить еще</button>
				</div>
			</div>	
			<div id='user-other'>
				<select name="department">
					<option selected disabled>Выберите отдел</option>
					<option value='1'>мероприятия</option>
					<option value='2'>новости</option>
					<option value='3'>учебный отдел</option>
					<option value='4'>профком</option>
				</select>		
			</div>
			<button>Вход</button>
		</form>
	</main>
</body>
</html>