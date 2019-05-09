<?php
$user = 'root';
$pass = '';
$db = 'mydb';
//create connection
$con = mysqli_connect('localhost', $user, $pass, $db) or die("Connection failed: ".$con->connect_error);

echo "Connected successfully";
//sql to insert into table

$sql = "INSERT INTO students(name, email, password)VALUES('Phalguni', 'phalguni_934@gmail.com', '12345')";

if(mysqli_query($con, $sql)){
  echo "New Record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 ?>
