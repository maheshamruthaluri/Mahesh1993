<?php

define('DB_NAME', 'ScanBuyDB');
define('DB_USER', 'root');
define('DB_PASSWORD','neartoyou');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);



if(!$link) {
	die('Could not connect:' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected) {
die('cant use' . DB_NAME. ':' . mysql_error());
}

$Title = $_POST['Title'];
$Author = $_POST['Author'];
$Pages = $_POST['pageCount'];
$ISBN = $_POST['ISBN'];


$sqlquery = "INSERT INTO Title (Title,Author,Pages,ISBN) VALUES ('$Title','$Author','$pageCount','$ISBN')";

if(mysql_query(($sqlquery)) {
	die('Error:' . mysql_error());
}

echo 'connected successfully';
mysql_close();

?>