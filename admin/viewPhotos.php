<?php
	ini_set('display_errors','On');
	error_reporting(E_ALL);
	include_once 'class/user.class.php';
	$userId = $_REQUEST['userId'];

	$user = new User();
	$user = json_decode($user->get(["userId" => $userId, "fields" => "photoUrl, photoType"]), true)['response'];
	if(!$user) {
		$name = './img/Avatar.png';
		$photoType = 'image/png';
	} else {
		$user = $user[0];
		$name = trim($user['photoUrl']) ? $user['photoUrl'] : './img/Avatar.png';
		$photoType = trim($user['photoType']) ? $user['photoType'] : 'image/png';
	}

	header("Content-Type: " . $photoType);
	readfile($name);
?>