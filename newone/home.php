<?php session_start();

$username=$_SESSION['username'];
$db=new mysqli('localhost','root','','nproject') or die(mysqli_error($db));

$result=$db->query("SELECT * FROM user1 WHERE username='$username'")or die($db->error);

while($row=$result->fetch_assoc()):

$d=$row['department'];


endwhile;

$_SESSION['dept']=$d;;


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Quicksand">
  <style>
  .myt
{
	top:-20px;
	width:100%;
	background-color: #007bff;
	
	
}

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 50px;
}

#narn
{
	font-family: Quicksand, sans-serif;
    font-weight: 800;
	font-size: 140%;
	
	width: 100%;
  padding: 10px;
  border: 1px;
  margin: 0; 
	
	
}

#title
{
	font-family: Quicksand, sans-serif;
    font-weight: 700;
	font-size: 120%;
	color: yellow;
 
	
	width: 100%;
  padding: 10px;
  border: 1px;
  margin-top: -10px; 
	
	
}
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<div class="myt">
<center>
<img src="untitled1.png" alt="Logo">
<p id="narn">NARAYANA ENGINEERING COLLEGE :: GUDUR</p>
<p id="title">A Periodic Departmental Activities Performance Analysing and Visualisation system</p>
</center>
</div>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>      
    <p>Department of <?php echo $d; ?></p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/newone/home.php">Dashboard</a></li>
        <li><a href="#">Visualisation</a></li>
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">GUEST LECTURES</div>
        <div class="panel-body"><img src="GuestLecture.png" class="img-responsive" style="width:100%;height:100%" alt="Image"></div>
        <div class="panel-footer"><a class="btn btn-success" href="http://localhost/Life/shome.php">OPEN</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">FACULTY MEETINGS</div>
        <div class="panel-body"><img src="FacMeet.jpg" class="img-responsive" style="width:100%;height:100%" alt="Image"></div>
        <div class="panel-footer"><a class="btn btn-success" href="http://localhost/Life2/shome.php">OPEN</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">STUDENT BODY MEETINGS</div>
        <div class="panel-body"><img src="StuCoun.jpg" class="img-responsive" style="width:100%;height:100%" alt="Image"></div>
        <div class="panel-footer"><a class="btn btn-success" href="http://localhost/Life3/shome.php">OPEN</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CERTIFICATE COURSES</div>
        <div class="panel-body"><img src="CC.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="btn btn-success" href="http://localhost/Life4/shome.php">OPEN</a></div>
      </div>
    </div>
    
    
  </div>
</div><br><br>



</body>
</html>
