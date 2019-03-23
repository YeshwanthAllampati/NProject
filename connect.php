<?php
define('DB_USER',"root");
define('DB_HOST',"localhost");
define('DB_PASSWORD',"");
define('DB_NAME',"pdb");

$abc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die("COULD NOT CONNECT".mysqli_connect_error());











?>