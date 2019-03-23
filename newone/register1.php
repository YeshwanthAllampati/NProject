<?php

session_start();

$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

if(isset($_POST['submit']))
{
	
	$fname=mysql_real_escape_string($_POST['fname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$email=mysql_real_escape_string($_POST['email']);
	$username=mysql_real_escape_string($_POST['username']);
	$phone=mysql_real_escape_string($_POST['phone']);
	$department=mysql_real_escape_string($_POST['department']);
	$designation=mysql_real_escape_string($_POST['designation']);
	
	$password=mysql_real_escape_string($_POST['password']);
	$repassword=mysql_real_escape_string($_POST['repassword']);
	$securitykey=mysql_real_escape_string($_POST['securitykey']);

	if($password==$repassword)
	{
		$password=md5($password);
		$db->query("INSERT INTO user1(fname,lname,email,username,phone,department,designation,password) 
	VALUES('$fname','$lname','$email','$username','$phone','$department','$designation','$password')")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="Now You are ready to Login";
	$_SESSION['username']=$username;
	header("location: login.php");
		
	}
	else
	{
		$_SESSION['message']="The Two passwords do not match";
		
		
	}

	}



?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styler.css">
    <title>Register</title>
	
	
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<div class="myt">
<center>
<img src="untitled1.png" alt="Logo">
<p id="narn">NARAYANA ENGINEERING COLLEGE :: GUDUR</p>
<p id="title">A Periodic Departmental Activities Performance Analysing and Visualisation system</p>
</center>
</div>

<div class="row">
<div class="column">
<div class="sidenav">
<center>
            <h2 id="t1">Already a User?</h2>
            <p id="t2">Login Here </p>
			<button class="btn btn-light btn-lg" onclick="location.href = 'http://localhost/newone/login.php';">LOGIN</button>
 </center>        
     </div>
	 </div>
<div class="column">
<main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="background-color: #007bff;"><b>Register</b></div>
                        <div class="card-body">
                            <form name="my-form" id="regform" onsubmit="return validform()" action="register.php" method="post">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="form-group col-md-6">
                                        <input type="text" id="fname" class="form-control" name="fname">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="form-group col-md-6">
                                        <input type="text" id="lname" class="form-control" name="lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="form-group col-md-6">
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="form-group col-md-6">
                                        <input name="username" type="text" id="username" class="form-control" name="username">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input name="phone" type="text" id="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Department</label>
                                    <div class="col-md-6">
                                        <select name="department" id="department" class="form-control">
		<option value="CSE">CSE</option>
		<option value="ECE">ECE</option>
		<option value="EEE">EEE</option>
		<option value="MEC">MEC</option>
		<option value="CIV">CIV</option>
		<option value="FED">FED</option>
			</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Designation</label>
                                    <div class="col-md-6">
                                        <input type="text" id="designation" class="form-control" name="designation">
                                    </div>
                                </div>
								 <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Create Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>
																 <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Re-Enter Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="repassword" class="form-control" name="repassword">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right">
                                               Security Key</label>
                                    <div class="col-md-6">
                                        <input type="password" id="securitykey" class="form-control" name="securitykey">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" name="submit" value="Register" class="btn btn-primary">
                                         
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    

</main>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<script src="act.js"></script>


</body>
</html>