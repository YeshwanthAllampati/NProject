<html>
<head>
<title>Add Student</title>
</head>
<body>

<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'nproject');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());



require_once('../mysqli_connect.php');

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['branch'])){

        // Adds name to array
        $data_missing[] = 'branch';

    } else {

        // Trim white space from the name and store the name
        $branch = trim($_POST['branch']);

    }

    if(empty($_POST['year'])){

        // Adds name to array
        $data_missing[] = 'year';

    } else{

        // Trim white space from the name and store the name
        $year = trim($_POST['year']);

    }

    if(empty($_POST['topic'])){

        // Adds name to array
        $data_missing[] = 'topic';

    } else {

        // Trim white space from the name and store the name
        $topic = trim($_POST['topic']);

    }

    if(empty($_POST['org'])){

        
        $data_missing[] = '	org';

    } else {

        // Trim white space from the name and store the name
        $org = trim($_POST['org']);

    }

    if(empty($_POST['remarks'])){

        // Adds name to array
        $data_missing[] = 'remarks';

    } else {

        // Trim white space from the name and store the name
        $remarks = trim($_POST['remarks']);

    }

    if(empty($_POST['eid'])){

        // Adds name to array
        $data_missing[] = 'eid';

    } else {

        // Trim white space from the name and store the name
        $eid = trim($_POST['eid']);

    }

    
    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO npglec(dept, Year,topic,organisation,remarks,evcode) VALUES (?, ?, ?,
        ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        //i Integers
        //d Doubles
        //b Blobs
        //s Everything Else
        
        mysqli_stmt_bind_param($stmt, "sisssi", $branch,$year,$topic,$organisation,$remarks,$eid);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Event Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>


</body>
</html>