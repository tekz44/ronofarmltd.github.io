<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Information</title>
    <style type="text/css">
            .srch
            {
                    padding-left: 900px;
            }
    </style>
</head>
<body>
    <!--____________________________search bar_____________________________-->

    <div class="srch"> 
        <form class="navbar-form" method="post" name="form1" action="">
                <input class="form-control" type="text" name="search" placeholder="Staff username.." required="">
                <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
        </form>
        
    </div>

    <h2>List of Staff</h2>
    <?php

        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT first,last,username,unit,email FROM `staff` where username like '%$_POST[search]%' ");

            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No staff found with that username. Try searching again.";
            }
            else
            {
        echo "<table class='table table-bordered table-hover' >";
             echo"<tr style='background-color: #6db6b9e6;'>";   
                //Table header
                echo "<th>"; echo "First Name";  echo "</th>"; 
                echo "<th>"; echo "Last Name";  echo "</th>"; 
                echo "<th>"; echo "Username";  echo "</th>";
                echo "<th>"; echo "Unit";  echo "</th>";
                echo "<th>"; echo "Email";  echo "</th>";

            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
                echo "<tr>";

                echo "<td>"; echo $row['first']; echo "</td>";
                echo "<td>"; echo $row['last']; echo "</td>";
                echo "<td>"; echo $row['username']; echo "</td>";
                echo "<td>"; echo $row['unit']; echo "</td>";
                echo "<td>"; echo $row['email']; echo "</td>";

                echo "</tr>";
            }   
        echo "</table>";
            }
        }
            /*if button is not pressed.*/
        else
        {
            $res=mysqli_query($db,"SELECT first,last,username,unit,email FROM `staff`;");
        echo "<table class='table table-bordered table-hover' >";
            echo"<tr style='background-color: #6db6b9e6;'>"; 
                      //Table header
                echo "<th>"; echo "First Name";  echo "</th>"; 
                echo "<th>"; echo "Last Name";  echo "</th>"; 
                echo "<th>"; echo "Username";  echo "</th>";
                echo "<th>"; echo "Unit";  echo "</th>";
                echo "<th>"; echo "Email";  echo "</th>";
                
                echo "</tr>";

                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr>";
                    
                    echo "<td>"; echo $row['first']; echo "</td>";
                    echo "<td>"; echo $row['last']; echo "</td>";
                    echo "<td>"; echo $row['username']; echo "</td>";
                    echo "<td>"; echo $row['unit']; echo "</td>";
                    echo "<td>"; echo $row['email']; echo "</td>";

                    echo "</tr>";
                }         
        echo "</table>";
        }
    ?>    
</body>
</html>
