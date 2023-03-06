<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <!--____________________________search bar_____________________________-->

    <div class="srch"> 
        <form class="navbar-form" method="post" name="form1" action="">
            <div>
                <input class="form-control" type="text" name="search" placeholder="search products..">
                <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
        </form>
        
    </div>

    <h2>List of Products</h2>
    <?php

        if(isset($_POST['submit']))
        {
            
        }

        $res=mysqli_query($db,"SELECT * FROM `products` ORDER BY `products`.`product` ASC;");

        echo "<table class='table-bordered table-hover' >";
            echo "<tr style='background-color: #6db6b9e6;'>";
                //Table header
                
                echo "<th>"; echo "Unit";  echo "</th>"; 
                echo "<th>"; echo "Animal Name";  echo "</th>"; 
                echo "<th>"; echo "Animal-Quantity";  echo "</th>";
                echo "<th>"; echo "Product Name";  echo "</th>";
                echo "<th>"; echo "Product-Quantity";  echo "</th>";
                echo "<th>"; echo "Holder Name";  echo "</th>"; 
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['unit']; echo "</td>";
                echo "<td>"; echo $row['animal']; echo "</td>";
                echo "<td>"; echo $row['quantity of animal']; echo "</td>";
                echo "<td>"; echo $row['product']; echo "</td>";
                echo "<td>"; echo $row['quantity of product']; echo "</td>";
                echo "<td>"; echo $row['holder']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }   
        echo "</table>"
 ;   ?>    
</body>
</html>
