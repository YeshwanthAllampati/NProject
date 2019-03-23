<?php
define('DB_HOST',"localhost");
define('DB_USER',"root");
define('DB_PASSWORD',"");
define('DB_NAME',"pdb");

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die("Couldnt connect because".mysqli_connect_error());

$query="SELECT * FROM user";

$resp=mysqli_query($con,$query);

if($resp)
{
	echo  "The names are";
	while($row=mysqli_fetch_array($resp))
	{
		echo $row['Name'];
		
	}
	
}
else
{
	
	echo "Didnt get proper response";
	
}










?>