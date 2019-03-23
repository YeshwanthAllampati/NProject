<?php

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','nproject');

$db=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

$depts = array("CSE", "ECE", "EEE", "MECH","CIV","FED");

$events = array("GuestLecture", "FacultyMeets", "StudentMeets", "CertificateCourse","BridgeCourse");
 
foreach ($events as $yesh) {
foreach ($depts as $value) {

for ($x = 1; $x <= 12; $x++) {
    $db->query("Insert into king(dept,mon,event) values('$value','$x','$yesh')") or die($db->error);
} 

    
}
}


if(!$db)
{
	die("Connection failed: ".$mysqli->error);
	
}


echo "Done Boss";
?>