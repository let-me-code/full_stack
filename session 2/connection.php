<?php

$user ='root';
$pass ='';
$db='mydb' ;
//create connection
$con =  mysqli_connect('localhost', $user, $pass,$db) or
    die("Connection failed: " . $con->connect_error);

echo "Connected successfully";


?>