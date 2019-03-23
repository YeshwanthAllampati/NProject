<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Quicksand">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<?php
session_start();
if(isset($_SESSION['message'])):?>

<p class="alert alert-info">
<?php 
	echo $_SESSION['message'];
	unset($_SESSION['message']);
?>
</p>
<?php endif ?>
<?php

if(!isset($_SESSION['message']))
{

$_SESSION['message']=" ";
}
$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

if(isset($_POST['submit']))
{
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	
	$password=md5($password);
	
	$result=$db->query("SELECT * FROM user1 WHERE username='$username' AND password='$password'")or die($db->error);

	if(mysqli_num_rows($result)==1)
	{
		
		$row=$result->fetch_assoc();
		$verified=$row['verified'];
		
		
		if($verified==1)
		{
			$_SESSION['message']="You are now Logged in";
			$_SESSION['username']=$username;
			$_SESSION['islog']=true;
		
			header("location: home.php");
		}
		else
		{
			$_SESSION['message']="This account has not been verified";
			header("location: login.php");
		}
		
		
	}
	else
	{
		$_SESSION['message']="     Invalid Username or password";
		header("location: login.php");
		
	}
}



?>





<div class="myt">
<center>
<img src="untitled1.png" alt="Logo">
<p id="narn">NARAYANA ENGINEERING COLLEGE :: GUDUR</p>
<p id="title">A Periodic Departmental Activities Performance Analysis and Visualisation system</p>
</center>
</div>
<div class="sidenav">
<center>
            <h2 id="t1" style="margin-bottom:50px;">New User?</h2>
            <p id="t2" >Please Register yourself Here</p>
			<button class="btn btn-light btn-lg" onclick="location.href = 'http://localhost/newone/register.php';" style="margin-bottom:150px;">REGISTER</button>
 </center>        
     </div>
	 <form id="loginform" action="login.php" method="post">
<div class="logincontent">
        <div class="loginheading">
            Login 
        </div>
		
        <label for="txtUserName">
            Username:</label>
        <input type="text" id="username" name="username" />
        <br><label for="txtPassword">
            Password:</label>
        <input type="password" id="password" name="password" />
        <div class="loginremember">
            
            <input name="submit" type="submit" class="loginbtn" value="Login" id="submit" />
        </div>
    </div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<script src="loginact.js"></script>  

</body>

</html>