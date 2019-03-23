<?php

session_start();

$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

if(isset($_POST['register-btn']))
{
	
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
	
	if($password==$password2)
	{
		$password=md5($password);
		$db->query("INSERT INTO users(username,email,password) 
	VALUES('$username','$email','$password')")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="You are now Logged in";
	$_SESSION['username']=$username;
	header("location: home.php");
		
	}
	else
	{
		$_SESSION['message']="The Two passwords do not match";
		
		
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
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<?php
if(isset($_SESSION['message']))
{
	echo "<div id='edo'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
	
	
}
?>
<form id="form1" method="post" action="register.php">

<table>
<tr>
	<td>UserName:</td>
	
	<td><input id="username1" type="text" name="username" class="ti"></td>
	<td><span id="usernameerror" style="color:red">Not Less than 5 Charecters<span></td>
	</tr>
<tr>
	<td>Email:</td>
	
	<td><input id="email1" type="email" name="email" class="temail"></td>
</tr>
<tr>
	<td>Password:</td>
	
	<td><input id="password1" type="password" name="password" class="tp"></td>
</tr>
<tr>
	<td>Re-enter Password:</td>
	
	<td><input id="password2" type="password" name="password2" class="tp2"></td>
</tr>
<tr>
<td><label>Department</label></td>
 <td> <select name="dept" class="form-control" value="<?php echo $dept; ?>" id="sel1">
    <option value="CSE" selected>CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="MEC">MEC</option>
    <option value="CIV">CIV</option>
    <option value="FED">FED</option>
  </select></td>
  <td><span id="choose1" style="color:red"><span></td>
  </tr>
<tr>
	
	
	<td><input type="submit" name="register-btn" class="tsub" value="SUBMIT"></td>
</tr>


</table>

</form>
</body>

</html>