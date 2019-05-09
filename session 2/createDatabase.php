<head>
  <title> Hello!</title>
</head>
<body>
  <?php
  $user = 'root';
  $pass = '';
  $db = 'mydb';
  //create connection
  $con = mysqli_connect('localhost', $user, $pass) or die("Connection failed: ".$con->connect_error);

  echo "Connected successfully";
  //create database
  $sql = "CREATE DATABASE mydb";
  if(mysqli_query($con, $sql)){
    echo "Database created successfully";
  }
  else{
    echo "Error creating database: ".mysqli_error($con);
  }
   ?>
</body>
