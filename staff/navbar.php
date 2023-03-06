<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
  
     <link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="utf-8"> 
     <meta name="viewpoint" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

            <nav class="navbar navbar-inverse">
              <div class="contain-fluid">
                <div class="navbar-header">    
                 <a class="navbar-brand active">RONO FARM LTD</a>
                </div> 
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="products.php">PRODUCTS</a></li>                    
                    <li><a href="message.php">MESSAGE</a></li>
                </ul>
                <?php
                   if(isset($_SESSION['login_user']))
                   {?>
                        <ul class="nav navbar-nav">
                          <li><a href="profile.php">PROFILE</a></li>
                        </ul>  
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="">
                            <div style="color: white;">
                              <?php
                                echo "Welcome".$_SESSION['login_user'];
                              ?>  
                            </div>
                          </a></li>
                          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> STAFF-LOGOUT</span></a></li>
                        </ul>  
                      <?php
                   }
                   else
                   {  ?>
                      <ul class="nav navbar-nav navbar-right">

                        <li><a href="staff-login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                  
                        <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>
                      </ul>
                        <?php
                   }
                ?>

                
              </div>
            </nav>
    
</body>    
</html>