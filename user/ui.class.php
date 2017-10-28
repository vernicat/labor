<?php
	class UI {
		function __construct(){
			$info = $this->info();

			$title = $info[0]." | Панель администратора";
			$declension = $info[1];
			$tmp='tmp/';

			require_once $tmp.'top.php';
			require_once $tmp.'table-top.php';
		}

		function bottom(){
			$tmp='tmp/';
			require_once $tmp.'dialog.php';
			// require_once $tmp.'bottom.php';
		}

		function info() {
			$url = $_SERVER['REQUEST_URI'];
			$url = explode('?', explode('/', $url)[1])[0];
			if ($url == '')
				$url = 'news';

			switch ($url) {
				// case 'achieve':
				// 	$title = "Достижения";
				// 	break;
				case 'admin':
					$title = 'Администраторы';
					$declension = 'администраторов';
					break;
				case 'discipline':
					$title = "Дисциплины";
					$declension = 'дисциплин';
					break;
				case 'division':
					$title = "Отделения";
					$declension = 'отделений';
					break;
				case 'event':
					$title = "Мероприятия";
					$declension = 'мероприятий';
					break;
				case 'group':
					$title = "Группы";
					$declension = 'групп';
					break;
				case 'news':
					$title = 'Новости';
					$declension = 'новостей';
					break;
				case 'schedule':
					$title = "Расписание";
					break;
				case 'speciality':
					$title = "Специальности";
					$declension = 'специальностей';
					break;
				case 'stock':
					$title = 'Акции';
					$declension = 'акций';
					break;
				case 'user':
					$title = 'Пользователи';
					$declension = 'пользователей';
					break;
			}

			return array($title, $declension);
		}


	}
?>