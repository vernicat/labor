<?
	header("Content-type:text/html;charset=utf-8");
	error_reporting(E_ERROR);

	$class = "class/"; 
	include_once $class.'helper.class.php';
	include_once $class.'sql.class.php';
	include_once $class.'user.class.php';
	include_once $class.'task.class.php';
	
	$r = $_REQUEST;
	$getMethod = explode(".", Helper::deleteHtml($r['method']));
	$section = $getMethod[0]; // отделяем класс
	$method = $getMethod[1]; // отделяем метод
	
	unset($r['method']);  // чтобы не мешался
	$params = [];
	
	foreach ($r as $key => $value) { // кидаем все остальные параметры в массив, принимая их за параметры
		$params[$key] = $value;
	}
	if(method_exists($section, $method)) { // если такой метод и класс найдены
		$newClass = new $section();
		echo $newClass->$method($params);
	} else // если метод или класс не найдены
		echo Helper::echoResponse("Method not found!");

	//var_dump($getMethod);
?>