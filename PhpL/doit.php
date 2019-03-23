<?php
define('DB_USER',"root");
define('DB_HOST',"localhost");
define('DB_PASSWORD',"");
define('DB_NAME',"pdb");

$abc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die("COULD NOT CONNECT".mysqli_connect_error());


$query="SELECT * FROM user";

$response=@mysqli_query($abc,$query);

if($response)
{

while($row=mysqli_fetch_array($response))
{
echo "<p>".$row['Uid']."</p>"."			"."<p>".$row['Name']."</p>"."			"."<p>".$row['salary']."</p>"."			";



}

}
else
{

echo "couldnt connect";




}


mysqli_close($abc);




?>