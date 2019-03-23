<html>

<body>

 

 

<?php

$con = mysqli_connect("localhost","root","","test");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 



 

$sql="INSERT INTO table_details (fname, lname)

VALUES

('$_POST[fname]','$_POST[lname]')";

  

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";
$sql1 = "SELECT fname,lname FROM table_details";
$result = mysqli_query($con, $sql1);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  " - Name: " . $row["fname"]. " lastname: " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
}

 

mysqli_close($con)

?>

</body>

</html>