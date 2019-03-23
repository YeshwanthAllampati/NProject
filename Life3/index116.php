<!DOCTYPE html>
<html lang="en">
<head>
  <title>GuestLectures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="sidebar.css?version=51" type="text/css">
</head>
<body>
<div id="wrapper">
	
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li><a href="index116.php">One</a></li>
			<li><a href="index116.php">On</a></li>
			<li><a href="index116.php">One</a></li>
		
		
		</ul>
	
	</div>
	
	<div id="page-content-wrapper">
		<div class="container-fluid">
		<div class="row">
		
		<div class="col-lg-12">
		
			<a href="index116.php" class="btn btn-success" id="menu-toggle">Toggle Menu</a>
			<h1>Sidebar layouts are cool</h1>
			<p>I Love apple pie</p>
		
		</div>
		
		</div>
	
	
	</div>
	
	</div>

</div>
<script>
$("#menu-toggle").click(function(e){
	
	e.preventDefault();
	$("#wrapper").toggleClass("menuDisplayed");
	
}); 

</script>
</body>
</html>