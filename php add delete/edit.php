<?php
// including the database connection file
include_once("config.php");
include_once('common.php');
if(isset($_POST['submit']))
{    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];    
    
    // checking empty fields
    if(empty($name) || empty($age) || empty($email)){
            echo "<font color='red'> No field should be left empty....</font><br>";
    } 
    else {    
        //updating the table
        $sql = "UPDATE users SET name=$name,age=$age,email=$email WHERE id=$id";
        $result = $mysqli->query($sql);
        //redirectig to the home page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $id = isset($_GET['id']) ? $_GET['id'] : '';

//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id=$id";
$result = $mysqli->query($sql);
 
while($row=mysqli_fetch_array($result))
{
    $name = $_GET['name'];
    $age = $_GET['age'];
    $email = $_GET['email'];
}
?>
<html>
<head>    
    <title>Edit Record</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <section id="contact">
        <div class="contact-section">
        <div class="container">
            <form action="edit.php" method='post' name='form1'>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" class="form-control" name="name" value="name" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" min=0 max=150 class="form-control" name="age" value="age" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" value="email" required>
                    </div>  
                    <div>
                        <input type="hidden" name="id" value="<?php echo $var;?>"><!-- Why This hidden ID field is needed??-->
                        <input type="submit" class="btn btn-default submit fa fa-paper-plane" name='update' value="update">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>
