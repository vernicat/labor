<?
require_once 'class/user.class.php';
$user = new User();

switch ($_REQUEST['act']) {
case 'uploadPhoto':
	$a = $user->uploadPhoto([$_FILES]);
	var_dump($a);
	//header("Location: qwe");
	break;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="qwe.php?act=uploadPhoto" method="post" enctype="multipart/form-data">
	<input type="file" name="userfile">
	<button>Отправь</button>
</form>
</body>
</html>