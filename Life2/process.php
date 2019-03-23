<?php

session_start();


$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));

$id=0;
$dept='';
$meetwith='';
$agenda='';
$date='';
$isminrec='';
$timestart='';
$timeend='';
$remarks='';
$update=false;

if(isset($_POST['save']))
{
	$dept=$_POST['dept'];
	$meetwith=$_POST['meetwith'];
	$agenda=$_POST['agenda'];
	$date=$_POST['date'];
	$timestart=$_POST['timestart'];
	$timeend=$_POST['timeend'];
	$isminrec=$_POST['isminrec'];
	$remarks=$_POST['remarks'];
	
	
	
	$mysqli->query("INSERT INTO npmeetfc(dept,meetwith,agenda,date,timestart,timeend,isminrec,remarks) 
	VALUES('$dept','$meetwith','$agenda','$date','$timestart','$timeend','$isminrec','$remarks')")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";
	
	header("location: index.php");
}
	
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM npmeetfc WHERE id=$id") or die($this->error($mysqli));
	
	$_SESSION['message']="Record has been deleted";
	$_SESSION['msg_type']="danger";

	header("location: index.php");
}	

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$_SESSION['help']=$id;
	$result=$mysqli->query("SELECT * FROM npmeetfc WHERE id=$id") or die($mysqli->error()) ;
	if(count($result)==1)
	{
		$row=$result->fetch_array();
		$dept=$row['dept'];
	$meetwith=$row['meetwith'];
	$agenda=$row['agenda'];
	$date=$row['date'];
	$timestart=$row['timestart'];
	$timeend=$row['timeend'];
	$isminrec=$row['isminrec'];
	$remarks=$row['remarks'];
	
	}
	
}

if(isset($_POST['update']))
{
	
	$id=$_SESSION['help'];
	$dept=$_POST['dept'];
	$meetwith=$_POST['meetwith'];
	$agenda=$_POST['agenda'];
	$date=$_POST['date'];
	$timestart=$_POST['timestart'];
	$timeend=$_POST['timeend'];
	$isminrec=$_POST['isminrec'];
	$remarks=$_POST['remarks'];
	
	$mysqli->query("UPDATE npmeetfc SET dept='$dept',meetwith='$meetwith',agenda='$agenda',date='$date',timestart='$timestart',
	timeend='$timeend',isminrec='$isminrec',remarks='$remarks' WHERE id=$id") 
	or die(mysqli_error($mysqli));
	
	$_SESSION['message']="Record has been Updated";
	$_SESSION['msg_type']="warning";
	
	header("location: index.php");
}
?>