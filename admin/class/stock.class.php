<?
	include_once 'class/sql.class.php';
	class Stock extends SQL{
		function add($params) {
			$stockText = $params[0];
			$stockStart = $params[1];
			$stockStop = $params[2];
			$isFree = $params[3];
			if($stockText && $stockStop && $stockStart && $isFree) {
				$this->q("INSERT INTO `stock`(`stockText`, `stockStart`, `stockStop`, `isFree`, `id_user`) VALUES ('".$stockText."', '".$stockStart."', '".$stockStop."', '".$isFree."', '".$_SESSION['userId']."')");
				return 1;
			} 
			return 0;
		}
	}
?>