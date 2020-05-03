<?php
session_start();

?>








<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Home :: Car Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">


	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

   <!-- Style for Dropdown --> 
   <link rel="stylesheet" type="text/css" href="css/dropdownstyle.css">
		
	</head>


	
	<body>
		
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo"><img src="picture/logo.png"></div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index2.php">Home</a></li>
						<li><a href="cars2.php">Cars</a></li>
						<li><a href="contact-us2.php">Contact Us</a></li>
                        <li>
                        <div class="dropdown">
                              <button class="dropbtn"><?php 
                        if(isset($_SESSION['user']))
                            echo $_SESSION['user'];
                        else
                            echo "LOGIN";
                        ?></button>
                                   <div class="dropdown-content">
                                        <a href="#">Profile</a>
                                        <a href="mybookings.php">My Bookings</a>
                                        <a href="index.php">Logout</a>
                                   </div>
                        </div>
                        </li>

						
					</ul>
				</div>
			</div>
		</nav>




<br>
<br>
<h1 class="text-center">Your Profile</h1>








 




	</body>
</html>