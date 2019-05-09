<!DOCTYPE html>
<html>
  <head>
    <title>Hello</title>
  </head>
  <body>
    <?php
      $servername = 'localhost';
      $username = 'root';
      $password = "";
      $dbname = "mydb";

      //create connection

      $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

    

      $sql = "SELECT name, email, password FROM students";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
          echo "name:" .  $row["name"]. " email: " . $row["email"]. " password: " . $row["password"];
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);
     ?>
  </body>
</html>
