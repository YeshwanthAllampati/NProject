<?php

session_start();


$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));

$id=0;
$dept='';
$year='';
$resperson='';
$topic='';
$organisation='';
$datestart='';
$dateend='';
$remarks='';
$update=false;

if(isset($_POST['save']))
{
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$resperson=$_POST['resperson'];
	$topic=$_POST['topic'];
	$organisation=$_POST['organisation'];
	$remarks=$_POST['remarks'];
	$datestart=$_POST['datestart'];
	$dateend=$_POST['dateend'];
	$evcode=$_POST['evcode'];
	
	
	$mysqli->query("INSERT INTO npglec(dept,year,resperson,topic,organisation,datestart,dateend,remarks,evcode) 
	VALUES('$dept','$year','$resperson','$topic','$organisation','$datestart','$dateend','$remarks','$evcode')")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";
	
	header("location: index.php");
}
	
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM npglec WHERE id=$id") or die($this->error($mysqli));
	
	$_SESSION['message']="Record has been deleted";
	$_SESSION['msg_type']="danger";

	header("location: index.php");
}	

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$_SESSION['help']=$_GET['edit'];
	$result=$mysqli->query("SELECT * FROM npglec WHERE id=$id") or die($mysqli->error()) ;
	if(count($result)==1)
	{
		$row=$result->fetch_array();
		
		$dept=$row['dept'];
	$year=$row['year'];
	$resperson=$row['resperson'];
	$topic=$row['topic'];
	$organisation=$row['organisation'];
	$remarks=$row['remarks'];
	$datestart=$row['datestart'];
	$dateend=$row['dateend'];
	}
	
}

if(isset($_POST['update']))
{
	
	
	$id=$_SESSION['help'];
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$resperson=$_POST['resperson'];
	$topic=$_POST['topic'];
	$organisation=$_POST['organisation'];
	$remarks=$_POST['remarks'];
	$datestart=$_POST['datestart'];
	$dateend=$_POST['dateend'];
	
	$mysqli->query("UPDATE npglec SET dept='$dept',year='$year',resperson='$resperson',topic='$topic',organisation='$organisation',
	datestart='$datestart',dateend='$dateend',remarks='$remarks' WHERE id=$id") 
	or die(mysqli_error($mysqli));
	
	$_SESSION['message']="Record has been Updated";
	$_SESSION['msg_type']="warning";
	
	header("location: index.php");
}
?>