<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

    <title>Staff registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8"> 
    <meta name="viewpoint" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style text="text/css">
            section
            {
              margin-top: -20px;
            }
          </style> 
      </head>
      <body>

<section>
    <div class="reg_img">

     <div class="box2">
         <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp; &nbsp; RONO FARM Ltd</h1>
         <h1 style="text-align: center; font-size: 25px;">Staff Registration Form</h1>
         <form style="text-align: center;" name="Registration" action="" method="post">
            
            <div class="login">
             <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
             <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>  
             <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
             <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
             <input class="form-control" type="text" name="unit" placeholder="Unit" required=""><br>
             <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>

             <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 80px; height: 30px;">
         </form>
        
     </div>
      
    </div> 
 </section>

            <?php

                if(isset($_POST['submit']))
                {
                    $count=0;
                    $sql="SELECT username from `staff`";
                    $res=mysqli_query($db,$sql);

                    while($row=mysqli_fetch_assoc($res))
                    {
                        if($row['username']==$_POST['username'])
                        {
                            $count=$count+1;
                        }
                    }
                if($count==0)    
                    {mysqli_query($db,"INSERT INTO `staff` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[unit]', '$_POST[email]');");
            ?>
                <script type="text/javascript">
                  alert("Registration successful");
                </script>
            <?php
        }   
                else 
                {
                 
                    ?>
                <script type="text/javascript">
                  alert("The username already exist.");
                </script>
            <?php
                }
                }

            ?>


        </body>
