<?
	session_start();

	require_once 'class/news.class.php';
	$news = new News();

	$newsTitle = $_REQUEST['newsTitle'];
	$newsText = $_REQUEST['newsText'];

	switch ($_GET['act']) {
	case 'createNews':

		$news->create([$newsTitle,$newsText]);
		header("Location: news");
		break;
	case 'deleteNews':
		$deleteNews = $_REQUEST['deleteNews'];
		$news->delete([$deleteNews]);
		header("Location: news");
		break;
}
?>