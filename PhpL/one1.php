<?php
if($_POST['CodeA']=="code1"||$_POST['CodeB']=="code1"||$_POST['Codec']=="code1")
{
	echo "Part 1 Code is engaged!";
	echo "<br>";
}
if($_POST['CodeA']=="code2"||$_POST['CodeB']=="code2"||$_POST['Codec']=="code3")
{
	echo "Part 2 Code is engaged!";
	echo "<br>";
}
if($_POST['CodeA']=="code3"||$_POST['CodeB']=="code3"||$_POST['Codec']=="code3")
{
	echo "Part 3 Code is engaged!";
	echo "<br>";
}

echo "<br>";

echo "I'm not done yet!";
?>