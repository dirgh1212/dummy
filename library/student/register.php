<?php
include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        section{
            margin-top: -15px;
        }

        .box2{
            height: 625px;
        }
    </style>

</head>

<body>

    <section>
        <div class="login_img">
            
                <div class="box2">
                    <h1 style="text-align: center; font-size: 35px;">Library Management
                        System</h1>
                    <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
            <form name="Registration" action="" method="post">
                <br>
                <div class="login">
                <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
                <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
                <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
                <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
                <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

                <input class="btn btn-default" type="submit" name="submit" value="Sign Up"
                style="color: black; width: 70px; height: 30px;">
            </form>
            
        </div>
        </div>
    </section>

    <?php 

        if(isset($_POST['submit']))
        {   
            $count=0;
            $sql="select username from `student`";
            $res=mysqli_query($db,$sql);
            while($row=mysqli_fetch_assoc($res))
            {
                if($row['username']==$_POST['username'])
                {
                    $count=$count+1;
                }
            
            }
            if($count==0)
            {
            mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]' , '$_POST[last]' , '$_POST[username]' ,'$_POST[password]', '$_POST[roll]','$_POST[email]','$_POST[contact]');");

            ?>
     
            <script type="text/javascript">
                alert("Registration succesful")
                </script>

    <?php
            }

            else{
                ?>
                <script type="text/javascript">
                alert("The username already exist.")
                </script>
            <?php
            }
       
       }

    ?>

</body>
</html>