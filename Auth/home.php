<?php

session_start();





?>





<html>

<head>
<title>My Reg
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Home</h1>

<?php
if(isset($_SESSION['message']))
{
	echo "<div id='edo'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
	
	
}
?>

<div><h4>Welcome <?php echo $_SESSION['username']; ?><h4></div>
<div><a href="logout.php">Logout</a></div>
</body>

</html>