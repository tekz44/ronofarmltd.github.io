<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .srch
        {
            padding-left: 1000px;
        }
        body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
    </style>
</head>
<body>
    <!--____________________________sidenav________________________________-->

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                    echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user'];
                ?>
            </div>

 <a href="profile.php">Profile</a> </div> 
 <a href="products.php">Products</a></div>
 <a href="#">Record Request</a></div>
 <a href="#">Issue Information</a></div>
</div>

<div id="main">

  <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; open</span>
  
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

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
