<?php

header('Content-Type: application/json');

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','crud');

$mysqli=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$mysqli)
{
	die("Connection failed: ".$mysqli->error);
	
}

$query=sprintf("SELECT * FROM scores ORDER BY playerid");

$result=$mysqli->query($query);

$data=array();
foreach ($result as $row)
{
	$data[]=$row;
}

$result->close();

$mysqli->close();

print json_encode($data);

?>