<?php
$serverMySql = "localhost";
$db_log = "vernicat";
$db_pass = "labor";

$database = "fkofte1_labor";
$table="news";
$quantity="2";

function db_connect($serverMySql, $db_log, $db_pass) {
	return mysql_connect($serverMySql, $db_log, $db_pass);
}

db_connect($serverMySql, $db_log, $db_pass);
mysql_set_charset('utf8');
mysql_SELECT_db($database);

$count = mysql_fetch_array(mysql_query("SELECT count(id_news) from `$table`"));

$total = ceil($count[0] / $quantity);

if(empty($_GET["p"])) {
	$_GET["p"] = "1";
}
$p = $_GET["p"];

$p = mysql_real_escape_string($p);
if(!ctype_digit($p) or $p > $total):
	$p = "1";
endif;

$first = $p * $quantity - $quantity;
$result = mysql_query("SELECT * from `$table` limit $first, $quantity");
?>