<!DOCTYPE html>
<html lang="en">
<head>
  <title>GuestLectures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<style>

  .myt
{
	top:-20px;
	width:100%;
	background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
	
	
	
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
<?php require_once 'process.php'; ?>

<?php
if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?Php 
	echo $_SESSION['message'];
	unset($_SESSION['message']);
?>
</div>
<?php endif ?>


<div class="container">
<?php
$d=$_SESSION['dept'];
$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));
$result=$mysqli->query("SELECT * FROM npglec WHERE dept='$d'")or die($mysqli->error);

//pre_r($result);
?>
<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Dept</th>
				<th>Year</th>
				<th>Res.Person</th>
				<th>Topic</th>
				<th>Organisation</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Remarks</th>
				
				
				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php	
	while($row=$result->fetch_assoc()):
?>
<tr>
	<td><?php echo $row['dept']; ?></td>
	<td><?php echo $row['year']; ?></td>
		<td><?php echo $row['resperson']; ?></td>
		
	<td><?php echo $row['topic']; ?></td>
	<td><?php echo $row['organisation']; ?></td>
	<td><?php echo $row['datestart']; ?></td>
		<td><?php echo $row['dateend']; ?></td>
	<td><?php echo $row['remarks']; ?></td>
	
	<td>
	<a href="glform.php?edit=<?php echo $row['id']; ?>"
		class="btn btn-info">EDIT</a>
	<a href="process.php?delete=<?php echo $row['id']; ?>"
		class="btn btn-danger">DELETE</a>	
		
	</td>
</tr>	
<?php endwhile; ?>
</table>
</div>

<?php
pre_r($result->fetch_assoc());

function pre_r($array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

?>
<div class="btn-group-vertical fixed-bottom">
<div><button type="button" class="btn btn-primary" name="B2" onclick="window.location.href = 'shome.php';">HOME</button>
</div>
 <div ><button type="button" class="btn btn-info" name="B1" onclick="window.location.href = 'http://localhost/newone/home.php'">Dashboard</button>
</div>
</div>
</div>

</body>
</html>
