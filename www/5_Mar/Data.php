<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database</title>
</head>

<body>

<?php

define('DB_NAME', 'content');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('Can\'t use ' . DB_NAME . ': ' .mysql_error());
}

$value = $_POST['input1'];
$value2 = $_POST['article'];

$sql = "INSERT INTO demo (input1, article) VALUES ('$value', '$value2')";

if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
}

mysql_close();
?>

</body>
</html>