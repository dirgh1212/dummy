

<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        .srch{
            padding-left:1000px;
        }

    </style>
</head>
<body>
 <!--------------------------------search bar--------------------------------------------->

    <div class="srch">
        <form class="navbar-form" action="" method="post" name="form1">
                <input class="form-control" type="text" name="search" placeholder="Student username..." required="">
                <button style="background-color: #315f5d;" type="submit" name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </form>
    </div>








    <h2>List of Students</h2>
    <?php

        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT first,last,username,roll,email,contact FROM `student` where username like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No student found with that username. Try searching again.";
            }

            else
            {
                echo "<table class='table table-bordered table-hover' >";
                // Table Header
                echo "<tr style='background-color: #315f5d;'>";
                    echo "<th style='color: white;'>";  echo"First Name";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Last Name";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Username";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Roll";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Email";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Contact";  echo"</th>";
                echo "</tr>";    
        
                while($row=mysqli_fetch_assoc($q))
                {
                    echo "<tr>";
                    echo "<td>";  echo $row['first'];  echo "</td>"; 
                    echo "<td>";  echo $row['last'];  echo "</td>"; 
                    echo "<td>";  echo $row['username'];  echo "</td>"; 
                    echo "<td>";  echo $row['roll'];  echo "</td>"; 
                    echo "<td>";  echo $row['email'];  echo "</td>"; 
                    echo "<td>";  echo $row['contact'];  echo "</td>"; 
        
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        else{
            $res=mysqli_query($db,"SELECT first,last,username,roll,email,contact FROM `student`;");

            echo "<table class='table table-bordered table-hover' >";
            // Table Header
            echo "<tr style='background-color: #315f5d;'>";
            echo "<th style='color: white;'>";  echo"First Name";  echo"</th>";
            echo "<th style='color: white;'>";  echo"Last Name";  echo"</th>";
            echo "<th style='color: white;'>";  echo"Username";  echo"</th>";
            echo "<th style='color: white;'>";  echo"Roll";  echo"</th>";
            echo "<th style='color: white;'>";  echo"Email";  echo"</th>";
            echo "<th style='color: white;'>";  echo"Contact";  echo"</th>";
            echo "</tr>";    
    
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>"; 
                echo "<td>";  echo $row['first'];  echo "</td>"; 
                echo "<td>";  echo $row['last'];  echo "</td>"; 
                echo "<td>";  echo $row['username'];  echo "</td>"; 
                echo "<td>";  echo $row['roll'];  echo "</td>"; 
                echo "<td>";  echo $row['email'];  echo "</td>"; 
                echo "<td>";  echo $row['contact'];  echo "</td>"; 
    
                echo "</tr>";
            }
            echo "</table>";
        }
   
    ?>
</body>
</html>