<?php
session_start();

if(isset($_GET['vkey']))
{
	
	$vkey=$_GET['vkey'];
	$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));
	
	$resultSet=$db->query("SELECT verified,vkey FROM user1 WHERE vkey='$vkey' LIMIT 1" );
	
	if($resultSet->num_rows==1)
	{
		$update=$db->query("UPDATE user1 SET verified=1 WHERE vkey='$vkey' LIMIT 1");
		
			if($update)
			{
				$_SESSION['msg-type']="success";
				$_SESSION['message']="Your Email has been verified.<br> Please LOGIN";
				header("location: login.php");
				echo "Your Account has been Verified. LOGIN";
			}
			else
			{
				echo $db->error;
			}
	}
	else
	{
		
		echo "This Account is invalid or already verified";
	}
}
else
{
	die("Something Went Wrong");
}

?>