<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
      if(isset($_COOKIES['email'])and isset($_COOKIES['pass']))
      {
          $email= $_COOKIES['email'];
           $pass= $_COOKIES['pass'];

           echo "<script>


            var email= "<?php echo $email;?>";
             alert("email");
                </script> ";
                </script> ";</script> ";
      }
      ?>

</body>
</html>