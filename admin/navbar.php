<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
        </div>

        <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>

        <?php
        if(isset($_SESSION['login_user']))
        {?>
           <ul class="nav navbar-nav">
           <li><a href="student1.php">
                STUDENT-INFORMATION
            </a>
            </li></ul>

                <ul class="nav navbar-nav navbar-right">
                <li><a href="">
                <div style="color:white;">
                <?php
                    echo "Welcome ".$_SESSION['login_user'];
                ?>
                </div>
                </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
           
            </ul>
            <?php
       
        }
        else 
        {?>
            <ul class="nav navbar-nav navbar-right">

            <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>
            </ul>
        <?php
        }

        ?>

        
    </div>
    </nav>

    
</body>
</html>