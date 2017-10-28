<?
	ini_set('display_errors','On');
	error_reporting(E_ERROR);

	header("Content-type:text/html;charset=utf-8");
	$class = "class/"; 
	include_once $class.'helper.class.php';
	include_once $class.'sql.class.php';

	$helper = new Helper();
	/**
	* 
	*/
	class News extends SQL
	{
		
		function __construct() {
			$this->connect();
		}
		
		function edit($params) {
			
		}

		function delete($params) {
			return $this->q("DELETE FROM `news` WHERE `id_news` = ".$params[0]);
		}

		function create($params) {
			$userId = $_SESSION['userId'];
			$newsTitle = $this->escape($params[0]) ?? NULL;
			$newsText = $this->escape($params[1]) ?? NULL;
			if($newsText)
				return $this->q("INSERT INTO `news`(`newsTitle`,`newsText`, `newsDate`, `id_user`) VALUES ('".$newsTitle."','".$newsText."', '".time()."', '".$userId."')");
		}
		
		function get() {
			return $this->q("SELECT `news`.`id_news`, `news`.`newsTitle`, `news`.`newsText`, `news`.`newsDate` FROM `news` ORDER BY `id_news` DESC");
			// return $this->q("SELECT `news`.`id_news`, `news`.`newsTitle`, `news`.`newsText`, `news`.`newsTitle`, `news`.`id_user`, `surName`, `firstName`, `secondName` FROM `news` INNER JOIN `user` ON `news`.`id_user` = `user`.`id_user` ORDER BY `id_news` DESC");
		}

		function getById($params) {
			
		}
	}