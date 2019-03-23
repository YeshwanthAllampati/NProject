<?php


if(isset($_POST['submit']))
{
	$datamiss=array();
	if(empty($_POST['Uid']))
	{
		
		$datamiss[]="Uid";
	}
	else
	{
		$Uid=trim($_POST['Uid']);
	if(empty($_POST['Name']))
	{
		
		$datamiss[]="Name"
	}
	else
	{
		$Name=trim($_POST['Name']);
	}
		if(empty($_POST['salary']))
	{
		
		$datamiss[]="salary"
	}
	else
	{
		$salary=trim($_POST['salary']);
	}
	if(empty('$datamiss'))
	{
		define('DB_HOST',"localhost");
		define('DB_USER',"root");
		define('DB_PASSWORD',"");
		define('DB_NAME',"pdb");


		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die("Couldnt connect because".mysqli_connect_error());
		
		$query="INSERT INTO User(Uid, Name, salary) VALUES(?,?,?);";
		
		$stmt=mysqli_prepare($con,&query);
		
		mysqli_stmt_bind_param($con,"isi",$Uid,$Name,$salary);
		
		mysqli_stmt_execute($stmt);
		
		$arows=mysqli_stmt_affected_rows($stmt);
		
		if($arows==1)
		{
			echo "Student Entered";
			mysqli_stmt_close($stmt);
			mysqli_close($con);
		}
		else
			echo "ERROR"
		
		
				
		
		
	}
	else
	{
		
		echo "Data is Missing, Enter all"
	}
}
else
{
	
	echo "Not Submitted Properly"
	
	
}
?>