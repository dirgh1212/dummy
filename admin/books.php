<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
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
                <input class="form-control" type="text" name="search" placeholder="search books..." required="">
                <button style="background-color: #315f5d;" type="submit" name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </form>
    </div>








    <h2>List of Books</h2>
    <?php

        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"select * from books where name like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No such book found. Try searching again.";
            }

            else
            {
                echo "<table class='table table-bordered table-hover' >";
                // Table Header
                echo "<tr style='background-color: #315f5d;'>";
                    echo "<th style='color: white;'>";  echo"ID";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Book-Name";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Author-Name";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Edition";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Status";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Quantity";  echo"</th>";
                    echo "<th style='color: white;'>";  echo"Department";  echo"</th>";
                echo "</tr>";    
        
                while($row=mysqli_fetch_assoc($q))
                {
                    echo "<tr>";
                    echo "<td>";  echo $row['bid'];  echo "</td>"; 
                    echo "<td>";  echo $row['name'];  echo "</td>"; 
                    echo "<td>";  echo $row['authors'];  echo "</td>"; 
                    echo "<td>";  echo $row['edition'];  echo "</td>"; 
                    echo "<td>";  echo $row['status'];  echo "</td>"; 
                    echo "<td>";  echo $row['quantity'];  echo "</td>"; 
                    echo "<td>";  echo $row['department'];  echo "</td>"; 
        
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        else{
            $res=mysqli_query($db,"select * from `books` order by `books`.`bid` asc;");

            echo "<table class='table table-bordered table-hover' >";
            // Table Header
            echo "<tr style='background-color: #315f5d;'>";
                echo "<th style='color: white;'>";  echo"ID";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Book-Name";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Author-Name";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Edition";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Status";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Quantity";  echo"</th>";
                echo "<th style='color: white;'>";  echo"Department";  echo"</th>";
            echo "</tr>";    
    
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>";  echo $row['bid'];  echo "</td>"; 
                echo "<td>";  echo $row['name'];  echo "</td>"; 
                echo "<td>";  echo $row['authors'];  echo "</td>"; 
                echo "<td>";  echo $row['edition'];  echo "</td>"; 
                echo "<td>";  echo $row['status'];  echo "</td>"; 
                echo "<td>";  echo $row['quantity'];  echo "</td>"; 
                echo "<td>";  echo $row['department'];  echo "</td>"; 
    
                echo "</tr>";
            }
            echo "</table>";
        }
   
    ?>
</body>
</html>