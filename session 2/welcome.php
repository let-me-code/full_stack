<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
session_start();
 echo"welcome    ".$_SESSION['email'];
 echo"<br/>";
 echo"your password is ".$_SESSION['pass'];
      echo"<br/>";
 echo"<a href=logout.php>logout</a>";
?>

</body>
</html>