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

$dept=mysql_real_escape_string($_POST['dept']);


$result=$mysqli->query("select event,mon,count(*) as count from king where dept='$dept' group by event,mon");

$data=array();
foreach ($result as $row)
{
	$data[]=$row;
}

$result->close();

$mysqli->close();

print json_encode($data);

?>