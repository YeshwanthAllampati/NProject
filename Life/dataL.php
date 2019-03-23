<?php

header('Content-Type: application/json');

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','nproject');

$mysqli=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$mysqli)
{
	die("Connection failed: ".$mysqli->error);
	
}

$evname=mysql_real_escape_string($_POST['evname']);


$result=$mysqli->query("select dept,mon,count(*) as count from king where event='$evname' group by dept,mon");

$data=array();
foreach ($result as $row)
{
	$data[]=$row;
}

$result->close();

$mysqli->close();

print json_encode($data);

?>