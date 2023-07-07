<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    nav{
    float: right;
    word-spacing: 30px;
    padding: 20px;
}

nav li{
    display: inline-block;
    line-height: 80px;
}
</style>

</head>

<body>
    <div class="wrapper">

        <header>
            <div class="logo">
                <img src="images/bg1.jpg" height="100px" width="120px" style="padding-top: 9px;">
                <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>

            <?php
                 if(isset($_SESSION['login_user']))
           {?>
            <nav>
            <ul>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
        <?php
           }

           else
           {
            
            ?>

            <nav>
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="admin.php">LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
            </nav>

           <?php
           
        }

            ?>
           
        </header>
        <section>
            <div class="section_img">
            <br><br><br>
            <div class="box">
                <br><br><br><br>
                <h1 style="text-align: center; font-size: 35px;">Welcome to Library</h1><br><br>
                <h1 style="text-align: center; font-size: 25px;">Opens at: 09:00 </h1><br>
                <h1 style="text-align: center; font-size: 25px;">Closes at: 15:00 </h1><br>
            </div>
            </div>
        </section>
        <!-- <footer>
            <p style="color:white; text-align: center;">
                <br>
                Email:&nbsp; dirghpandya4@gmail.com <br><br>
                Mobile:&nbsp; +918160327826
            </p>
        </footer> -->

    </div>
    <?php
        include "footer.php";
    ?>
</body>

</html>