<?php
$databaseHost = 'localhost';
$databaseName = 'TestDatabase';
$databaseUserName = 'root';
$databasePassword = '';

//OOP style programming to connect to database
$mysqli = new mysqli($databaseHost,$databaseUserName,$databasePassword,$databaseName); 
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
else
	echo "hello";
//Above connection can be made in procedural way as well.
?>