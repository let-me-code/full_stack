<?php
//including the database connection file
require_once("config.php");
 
//get id of the record from url using supergloabl variable $_GET['id']
$id = $_GET['id'];
echo "The user ID is -",$id;
 
//deleting the row from table
$sql = "DELETE FROM users WHERE id=$id";
$result = $mysqli->query($sql);

//redirecting to the home page (index.php in our case)
header("Location: /index.php");
?>