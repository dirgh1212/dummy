<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body
        {
            height: 550px;
            margin-top: 0px;
            background-image: url("images/feedback2.png");
            width: 1360px;
        }

        .wrapper
        {
            width: 900px;
            height: 600px auto;
            background-color:black;
            opacity: 0.8;
            color:white;
            padding:10px;
            margin: -10px auto;
        }

        .form-control
        {
            height: 100px;
            width: 60%;
        }

        .scroll
        {
            width:100%;
            height:350px;
            overflow: auto;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Let us know your feedback!!</h2>
        <form style="" action="" method="post" >
        <input class="form-control" type="text" name="comment" placeholder="Write something....."><br><br>
        <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width:100px; height:40px;">
    
        </form>
    <br><br>

    <div class="scroll">
        <?php
            if(isset($_POST['submit']))
            {
                $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
                if(mysqli_query($db,$sql))
                {
                    $q="SELECT * FROM `comments` ORDER BY `comments` . `id` DESC";
                    $res=mysqli_query($db,$q);

                    echo "<table class='table table-bordered'>";
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo "<tr>";
                            echo "<td>";  echo $row['comment'];  echo "</td>";
                        echo "</tr>";
                    }
                }
            }
            else
            {
                $q="SELECT * FROM `comments` ORDER BY `comments` . `id` DESC";
                    $res=mysqli_query($db,$q);

                    echo "<table class='table table-bordered'>";
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo "<tr>";
                            echo "<td>";  echo $row['comment'];  echo "</td>";
                        echo "</tr>";
                    }
            }
        ?>
     </div>
    </div>
</body>
</html>