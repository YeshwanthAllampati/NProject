<?php
$f=$_POST['fname'];
$l=$_POST['lname'];

echo "<p>$f</p>";

echo "<p>$l</p>";

foreach($_POST['course'] as $i)
	echo "$i<br/>";
?>