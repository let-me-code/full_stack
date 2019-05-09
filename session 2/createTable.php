<?php
$user = 'root';
$pass = '';
$db = 'mydb';
//create connection
$con = mysqli_connect('localhost', $user, $pass, $db) or die("Connection failed: ".$con->connect_error);

echo "Connected successfully";
//sql to create table

$sql = "CREATE TABLE students(
  name varchar(30),
  email VARCHAR(50),
  password INT(30)
)";

if(mysqli_query($con, $sql)){
  echo "Table students created successfully";
} else {
  echo "Error creating table: ".mysqli_error($con);
}
 ?>
