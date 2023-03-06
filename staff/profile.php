<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style type="text/css">
        .wrapper
        {
            width: 500px;
            margin: 0 auto;
            color:white;
        }
    </style>
</head>
<body style="background-color:#004528; ">
    <div class="container">
        <form action="" method="post">
            <button class="btn btn-default" style="float: right; width:70px;" name="submit1">Edit</button>
        </form>
        <div class="wrapper">
            <?php

                $q=mysqli_query($db, "SELECT * FROM staff where username='$_SESSION[login_user]' ;");
            ?>
            <h2 style="text-align:center;">My Profile</h2>
            <?php
                $row=mysqli_fetch_assoc($q);

                echo "<div><img src='images/".$_SESSION['pic']."'></div>";
            ?>
        </div>
    </div>
</body>
</html>