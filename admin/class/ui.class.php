<?php
	include_once 'user.class.php';
	class UI {
		function __construct(){
			$info = $this->info();
			$url = $info[0];
			$title = $info[1]." | Labor";
			
			require 'link.php';
			require_once $tmp.'top.php';
			require_once 'dialog.php';
			require_once $tmp.'header.php';

			if ($url != 'honor' && $url != 'schedule' && $url != 'search')
				require_once $tmp.'top-content.php';
		}

		function bottom(){
			require 'link.php';
			require_once $tmp.'bottom.php';
		}

		function info() {
			$str = $_SERVER['SCRIPT_NAME'];
			$url = str_replace("/", '', str_replace(".php", "", $str));
			// $url = explode('?', explode('/', $_SERVER['REQUEST_URI'])[1])[0];

			$user = new User();
			$userId = $_REQUEST['userId'] ?? $_SESSION['userId'];
			$d = json_decode($user->get(["userId" => $userId]), true)['response'][0];

			$sweet = array(
				 'account' => $d['firstName'] . " " . $d['surName'],
				 'achieve' => "Достижения",
				    'edit' => "Редактирование",
				   'event' => "Мероприятия",
				   'honor' => "Доска почета",
					 'msg' => "Сообщения",
				    'news' => "Новости",
				  'person' => "Персонализация",
			    'schedule' => "Расписание",
				  'search' => "Поиск",
				'settings' => "Настройки",
				   'stock' => "Акции"
			);
			
			$title = $sweet[$url];
			return [$url, $title];
		}


	}
?>