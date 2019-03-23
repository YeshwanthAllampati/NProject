<?php


session_start();
	
		$_SESSION['msg-type']="info";
		$_SESSION['message']="A Mail has been sent.<br>Please Verify your Email";
		
		header("location: login.php");

echo "Sent For Verification";

?>