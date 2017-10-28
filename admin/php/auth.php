<?php
	ini_set('display_errors','On');
	error_reporting(E_ALL);

	require_once '../class/user.class.php';
	$user = new User();
	switch ($_REQUEST['act']) {
		case 'login':
			$email = $_POST['email'];
			$password = $_POST['password'];
			$data = $user->login(["email" => $email, "password" => $password, "site" => 1]);
			$data = json_decode($data, true)['response'];
			if((int)$data['userId'])
				header("location: /news");
			else 
				echo $data;
			break;
		case 'registration':

			$password = $_POST['password'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$passwordConfirm = $_POST['passwordConfirm'];
			$data = $user->registration(["email" => $email, "password" => $password, "passwordConfirm" => $passwordConfirm]);
			$data = json_decode($data, true)['response'];
			if ((string)$data['successRegistration'] ==  1)
				header("location: /news");
			else 
			 	echo $data;
			break;
	}
?>