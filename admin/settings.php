<?php
	require_once 'class/ui.class.php';
	require_once 'class/user.class.php';
	$UI = new UI;
	$user = new User;
	$user = json_decode($user->get(), true)['response'][0];
	//var_dump($user);
?>
<form action="editName">
	<div class='column'>
		<p>Имя</p>
		<input type="text" name="firstName" value="<?=$user['firstName']?>">
	</div>
	<div class='column'>
		<p>Фамилия</p>		
		<input type="text" name="surName" value="<?=$user['surName']?>">
	</div>
	<button>Изменить</button>
</form>
<form action="changePassword">
	<div class='column'>
		<p>Старый пароль</p>
		<input type="password" name="passOld">
	</div>
	<div class='column'>
		<p>Новый пароль</p>		
		<input type="password" name="passNew">
	</div>
	<button>Изменить</button>
</form>
<form action="changeEmail">
	<div class='column'>
		<p>Электронная почта</p><p>fko...@mail.ru</p>
	</div>
	<div class='column'>
		<p>Новая почта</p>
		<input type="email" name="emailNew">
	</div>
	<button>Изменить</button>
</form>

	<button name="deleteAccount">Удалить аккаунт</button>	

<?php
	$UI->bottom();
?>