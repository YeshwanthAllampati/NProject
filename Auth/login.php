<?php

session_start();

$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

if(isset($_POST['login-btn']))
{
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	
	$password=md5($password);
	
	$result=$db->query("SELECT * FROM user1 WHERE username='$username' AND password='$password'")or die($db->error);

	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['message']="You are now Logged in";
		$_SESSION['username']=$username;
		
		
		$_SESSION['dept']=$b;
		
		
		header("location: home.php");
		
	}
	else
	{
		$_SESSION['message']="UserName/Password combination incorrect";
		
	}
}



?>





<html>

<head>
<title>My Reg
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
if(isset($_SESSION['message']))
{
	echo "<div id='edo'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
	
	
}
?>
<form method="post" action="login.php">

<table>
<tr>
	<td>UserName:</td>
	
	<td><input type="text" name="username" class="ti" required3></td>
</tr>

<tr>
	<td>Password:</td>
	
	<td><input type="password" name="password" class="tp" required></td>
</tr>
<tr>
	
	
	<td><input type="submit" name="login-btn" class="tsub" value="LOGIN"></td>
</tr>


</table>

</form>
</body>

</html>