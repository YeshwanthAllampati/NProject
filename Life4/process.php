<?php

session_start();


$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));

$id=0;
$dept='';
$year='';
$resperson='';
$course='';
$org='';
$datest='';
$dateend='';
$remarks='';
$update=false;

if(isset($_POST['save']))
{
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$resperson=$_POST['resperson'];
	$course=$_POST['course'];
	$org=$_POST['org'];
	$remarks=$_POST['remarks'];
	$datest=$_POST['datest'];
	$dateend=$_POST['dateend'];
	
	
	
	$mysqli->query("INSERT INTO npcertc(year,dept,course,resperson,org,datest,dateend,remarks) 
	VALUES('$year','$dept','$course','$resperson','$org','$datest','$dateend','$remarks')")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";
	
	header("location: index.php");
}
	
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM npcertc WHERE id=$id") or die($this->error($mysqli));
	
	$_SESSION['message']="Record has been deleted";
	$_SESSION['msg_type']="danger";

	header("location: index.php");
}	

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$_SESSION['help']=$_GET['edit'];
	$result=$mysqli->query("SELECT * FROM npcertc WHERE id=$id") or die($mysqli->error()) ;
	if(count($result)==1)
	{
		$row=$result->fetch_array();
		
		$dept=$row['dept'];
	$year=$row['year'];
	$resperson=$row['resperson'];
	$topic=$row['course'];
	$organisation=$row['org'];
	$remarks=$row['remarks'];
	$datestart=$row['datest'];
	$dateend=$row['dateend'];
	}
	
}

if(isset($_POST['update']))
{
	
	
	$id=$_SESSION['help'];
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$resperson=$_POST['resperson'];
	$topic=$_POST['course'];
	$organisation=$_POST['org'];
	$remarks=$_POST['remarks'];
	$dateest=$_POST['datest'];
	$dateend=$_POST['dateend'];
	
	$mysqli->query("UPDATE npcertc SET year='$year',dept='$dept',course='$course',resperson='$resperson',org='$org',
	datest='$datest',dateend='$dateend',remarks='$remarks' WHERE id=$id") 
	or die(mysqli_error($mysqli));
	
	$_SESSION['message']="Record has been Updated";
	$_SESSION['msg_type']="warning";
	
	header("location: index.php");
}
?>