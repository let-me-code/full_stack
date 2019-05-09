

<?php require'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
if(isset($_POST['insert']))
  {
$sql ="insert into student values('$name','$email')" ;
$query=mysqli_query($con,$sql) or die("insertion fail".$sql->connect_error);
if($query)
{
echo 'data inserted successfully';
}
}
//search
if(isset($_POST['search']))
   {
 $sql1 = "SELECT name, email FROM student";
$result = mysqli_query($con, $sql1);

if (mysqli_num_rows($result) > 0)
{
     // output data of each row
     while($row = mysqli_fetch_assoc($result))
      {
         echo  "  Name: " . $row["name"]. " " . $row["email"]. "<br>";
     }
}
else {
     echo "0 results";
     }
}
//update
if(isset($_POST['update']))
  {
     $sql2 = "UPDATE student SET email='$email' WHERE name='$name'";

       if (mysqli_query($con, $sql2))
       {
          echo "Record updated successfully";
        } else
        {
           echo "Error updating record: " . mysqli_error($con);
        }
  }
  //delete
  if(isset($_POST['delete']))
   {
     $sql3 = "DELETE FROM student WHERE name='$name'";

if (mysqli_query($con, $sql3)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
   }
?>
