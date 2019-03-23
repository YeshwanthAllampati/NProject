<?php

$email1=$_POST['email1'];

$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

$result=$db->query("SELECT * FROM user1 WHERE email='$email1'")or die($db->error);

if(mysqli_num_rows($result)==0)
{
	$data=true;
	print json_encode($data);
}
else
{
	$data=false;
	print json_encode($data);
}
	




?>