<?
	session_start();
	// ini_set('display_errors','On');
	// error_reporting(E_ALL);

	header("Content-type:text/html;charset=utf-8");
	require_once 'helper.class.php';
	require_once 'sql.class.php';

	$helper = new Helper();
	/**
	* 
	*/
	class User extends SQL
	{
		
		function __construct() {
			$this->connect();
		}

		function getPerson($params) {
			//var_dump($params);
			if ($params[0] == 'step1')
				return $r = $this->q("SELECT `id_institution` FROM `user` WHERE `id_user`='".$_SESSION['userId']."'")[0]['id_institution'];
			if ($params[0] == 'step1_select1')
			 	return $data = $this->q("SELECT `id_institution`, `institutionName` FROM `institution`");
			
			if ($params[0] == 'step2')
				return $r = $this->q("SELECT `surName` FROM `user` WHERE `id_user`='".$_SESSION['userId']."'")[0]['surName'];
			if ($params[0] == 'step2_select1')
			 	return $data = $this->q("SELECT `id_position`, `positionName` FROM `position`");


			// id_group
			// id_discipline
			// id_department
		}

		function changePerson($params) {
			$institution = $this->escape($params["institution"]) ?? NULL;

			$surName = $this->escape($params["surName"]) ?? NULL;
			$firstName = $this->escape($params["firstName"]) ?? NULL;
			$secondName = $this->escape($params["secondName"]) ?? NULL;
			$position = $this->escape($params["position"]) ?? NULL;

			$group = $this->escape($params["id_group"]) ?? NULL;

			$idiscipline = $this->escape($params["id_discipline"]) ?? NULL;
			$classGroup = $this->escape($params["сlassGroup"]) ?? NULL;

			$department = $this->escape($params["department"]) ?? NULL;

			//var_dump($params);
			if ($institution)
				return $r = $this->q("UPDATE `user` SET `id_institution`= '".$institution."' WHERE `id_user`='".$_SESSION['userId']."'");
			
			if ($surName)
				return $r = $this->q("UPDATE `user` SET `surName`= '".$surName."', `firstName`= '".$firstName."', `secondName`= '".$secondName."', `id_position`= '".$position."' WHERE `id_user`='".$_SESSION['userId']."'");
			
			if ($group)
				return $r = $this->q("UPDATE `user` SET `id_group`= '".$group."', `score`= `0` WHERE `id_user`='".$_SESSION['userId']."'");
			if ($discipline)
				return $r = $this->q("UPDATE `user` SET `id_discipline`= '".$discipline."', `classGroup`= '".$classGroup."' WHERE `id_user`='".$_SESSION['userId']."'");
			if ($id_department)
				return $r = $this->q("UPDATE `user` SET `id_department`= '".$department."' WHERE `id_user`='".$_SESSION['userId']."'");
		}

		function get($params = NULL) {
			$fields = $params['fields'] ? explode(",", $params['fields']) : NULL;
			$userId = $params['userId'];
			foreach ($fields as $key => $value) {
				if($fields[$key] == "password" || $fields[$key] == "accessToken")
					unset($fields[$key]);
				$fields[$key] = "`".$this->escape($value)."`";
			}
			$fields = implode(",", $fields);
			if(!$params['userId'])
				return Helper::echoResponse($this->q("SELECT ".($fields ? $fields : "`secondName`, `firstName`, `surName`, `id_user`")." FROM `user` WHERE `id_user` = ".$_SESSION['userId']));
			return  Helper::echoResponse($this->q("SELECT ".($fields ? $fields : "`secondName`, `firstName`, `surName`, `id_user`")." FROM `user` WHERE `id_user` = ".$userId));

		}
		function search($params) {
			$query = $params['query'];
			if(!$query) 
				return Helper::echoResponse($this->q("SELECT `secondName`, `firstName`, `surName`, `id_user` FROM `user` ORDER BY `id_user` DESC LIMIT 0,20"));
			return Helper::echoResponse($this->q("SELECT `secondName`, `firstName`, `surName`, `id_user` FROM `user` WHERE `secondName` LIKE '%$query%' OR `firstName` LIKE '%$query%' OR `surName` LIKE '%$query%' OR `id_user` LIKE '%$query%' ORDER BY `id_user` DESC LIMIT 0,20"));
		}
		function edit($params) {
			$firstName = $params['firstName'];
			$lastName = $params['lastName'];
			if($firstName && $lastName) {
				$this->q("UPDATE `user` SET `surName` = '".$lastName."', `firstName` = '".$firstName."' WHERE `id_user` = ".$_SESSION['userId']." LIMIT 1");
				return 1;
			}
			return 0;
		}

		function delete() {
			$id = $_SESSION['id'];
			$this->q("DELETE FROM `user` WHERE `id_user` = $id");
			return Helper::echoResponse(1);
		}
		
		function login($params) {
			$site = $params["site"] ?? NULL;
			$email = $this->escape($params["email"]) ?? NULL;
			$password = $this->escape($params["password"]) ?? NULL;

			if(!$email || !$password)
				return Helper::echoResponse("E-mail или пароль не введены!");

			$password = md5($password);
			$data = @$this->q("SELECT `id_user` FROM `user` WHERE email='".$email."' AND password='".$password."'")[0];

			if(!$data['id_user'])
				return Helper::echoResponse("Данные не верны!");

			$position = $this->q("SELECT `id_position` FROM `user` WHERE `id_user`='".$data['id_user']."'")[0];

			if ($position['id_position'] == 3) {

				$department = $this->q("SELECT `id_department` FROM `user` WHERE `id_user`='".$data['id_user']."'")[0]['id_department'];
				$_SESSION['departmentId'] = $department;
			}
			$_SESSION['id_position'] = $position['id_position'];

			$_SESSION['auth'] = true;
			$_SESSION['userId'] = (int) $data['id_user'];
			return Helper::echoResponse(["userId"=>$data['id_user']]);
		}

		function registration($params) {
			$email = $this->escape($params["email"]) ?? NULL;
			$password = $this->escape($params["password"]) ?? NULL;
			// $secondName = $this->escape($params["secondName"]) ?? NULL;
			// $firstName = $this->escape($params["firstName"]) ?? NULL;
			// $surName = $this->escape($params["surName"]) ?? NULL;

			if (!$email || !$password) {
				$dataEmail = @$this->q("SELECT `email` FROM `user` WHERE email='".$email."'")[0]['email'];
				if ($email == $dataEmail & $dataEmail != NULL)
					return Helper::echoResponse("Аккаунт с таким e-mail уже существует.");
				return Helper::echoResponse("Введены не все данные!");
			}

			// if(!$password || !$secondName || !$firstName || !$surName || !$email) 
			// 	return Helper::echoResponse("Введены не все данные!");

			$userId = $this->q("INSERT INTO `user`(`email`, `password`) VALUES ('".$email."', '".md5($password)."')",1)['returnedId'];
			
			// $userId = $this->q("INSERT INTO `user`(`firstName`, `secondName`, `surName`, `email`, `password`) VALUES ('".$firstName."', '".$secondName."', '".$surName."', '".$email."', '".md5($password)."')",1)['returnedId'];
			
			$_SESSION['auth'] = true;
			$_SESSION['userId'] = $userId;
			return Helper::echoResponse(["successRegistration" => 1,"userId" => $userId]);
		}
		function uploadPhoto($params) {
			$file = $params[0];
			$uploaddir = './uploadFiles/'; # Outside of web root
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
				$this->q("UPDATE `user` SET `photoUrl`= '".$uploadfile."', `photoType` = '".$file['userfile']['type']."' WHERE `id_user` = ".$_SESSION['userId']);
				echo 1;
			} else {
				echo 0;
			}
		}
	}
	
