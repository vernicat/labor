<?
// ini_set('display_errors','On');
// error_reporting(E_ALL);
session_start();
// var_dump($_SESSION);
if($_SESSION['auth'])
	exit(header("Location: /news"));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Labor - стремление к образованию</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src='script/main.js'></script>
</head>
<body>
	<main id ='index'>
		<img alt='' src="img/icon/header/logo-grey.png">
		<div class='card'>
			<div class='login'>
				<form action="php/auth?act=login" method="post">
					<input type="email" name='email' placeholder="E-mail" autofocus>
					<input type="password" name='password' placeholder="Пароль">
					<button>Войти</button>
				</form>
			</div>

			<div class='registration'>
				<form action="php/auth?act=registration" method="post">
					<input type="email" name='email' placeholder="E-mail">
					<input type="password" name='password' placeholder="Пароль">
					<button>Регистрация</button>
				</form>
			</div>
		</div>
		<a class='button'>Зарегистрировать</a>
	</main>
	<footer>
		<div class='center'>
			<p>© <? echo date("Y"); ?> LABOR</p>
<!-- 			<div class='page'>
				<a href="">О нас</a>
				<a href="">Помощь</a>
				<a href="">Блог</a>
			</div> -->
		</div>
	</footer>
</body>
</html>