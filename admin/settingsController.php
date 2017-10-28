<?
	include_once 'class/user.class.php';
	$user = new User();
	$act = $_REQUEST['act'];
	switch ($act) {
		case 'editName':
			$firstName = $_POST['firstName'];
			$lastName = $_POST['surName'];
			$response = $user->edit(['firstName' => $firstName, 'lastName' => $lastName]);
			if($response)
				header("Location: /settings?success=1");
			break;
	}
?>