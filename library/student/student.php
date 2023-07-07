<?php
 include "connection.php";
 include "navbar.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        section{
            margin-top: -20px;
        }
    </style>

</head>

<body>
  <section>
        <div class="login_img">

            <div class="box1">
                <h1 style="text-align: center; font-size: 35px;">Library Management
                    System</h1>
                <h1 style="text-align: center; font-size: 25px;">User Login Form</h1>
                <form name="login" action="" method="post">
                    <br>
                    <div class="login">
                        <input class="form-control" type="text" name="username" placeholder="Username"
                            required=""><br><br>
                        <input class="form-control" type="password" name="password" placeholder="Password"
                            required=""><br><br>
                        <input class="btn btn-default" type="submit" name="submit" value="Login"
                            style="color: black; width: 70px; height: 30px;">
                    </div>
                    <p style="color: white; padding-left: 40px;">
                        <br><br>
                        <a style="color: white;" href="">Forget password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        New to this website?<a style="color: white;" href="register.php"> Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
 <?php
 
  if(isset($_POST['submit']))
  {
    $res=mysqli_query($db,"select * from `student` where username='$_POST[username]' && password= '$_POST[password]';");
    $count=mysqli_num_rows($res);
    if($count==0)
    {
        ?>
            <!-- <script type="text/javascript">
                alert("The username and password does not match.");
                </script> -->

                <div class="alert alert-danger" style="width:650px; margin-left:360px; margin-top:-85px; text-align:center;">
                    <strong>The username or password is incorrect.</strong>
                </div>
        <?php
        }
        else
        {  
        $_SESSION['login_user'] = $_POST['username'];

        ?>
        <script type="text/javascript">
            window.location="index.php"
                </script>

        <?php
    }
  }

 ?>

</body>

</html>