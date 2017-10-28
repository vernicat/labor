<?php
// ini_set('display_errors','On');
// error_reporting(E_ALL);

if($_SESSION['auth'])
	exit(header("Location: news"));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Labor | Панель администратора</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src='script/main.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
	<header>
		<div class='center'>
			<img src="img/logo.png">
			<p>Панель администратора</p>		
		</div>

	</header>
	<form action="" method="post">
		<input type="email" name='email' placeholder="E-mail" autofocus>
		<input type="password" name='password' placeholder="Пароль">
		<button>Вход</button>
	</form>
</body>
</html>

<!-- DirectoryIndex news.php -->