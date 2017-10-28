<?php
session_start();
if(!$_SESSION['auth'])
	exit(header("Location: /"));
// var_dump(parse_url($url, PHP_URL_PATH));
// if(!$_REQUEST['ajax']) {
// echo random_int(1, 100);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?=$title?></title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
	<!-- <script type="text/javascript" src="script/clamp.min.js"></script> -->
	<script type="text/javascript" src='script/main.js'></script>
	<script type="text/javascript" src='script/ajax.js'></script>
</head>
<body>