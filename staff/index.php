<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		RONO Farm Ltd
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/logo.png">
			<h1 style="color: black;">RONO FARM LTD</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="products.php">PRODUCTS</a></li>
						<li><a href="staff-login.php">LOGOUT</a></li>
						<li><a href="message.php">MESSAGE</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
										<ul>
											<li><a href="index.php">HOME</a></li>
											<li><a href="products.php">PRODUCTS</a></li>
											<li><a href="student-login.php">STAFF-LOGIN</a></li>
											<li><a href="message.php">MESSAGE</a></li>
										</ul>
									</nav>
		<?php
		}

		?>
			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome!!</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 15:00 </h1><br>
			</div>
		</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email:&nbsp; RONO.Ltd@gmail.com <br>
				Mobile:&nbsp; &nbsp; 0701621276
			</p>
		</footer>
	</div>
</body>

</html>