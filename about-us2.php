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
		<title>Log In :: Car Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        

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
                                        <a href="profile.php">Profile</a>
                                        <a href="mybookings.php">My Bookings</a>
                                        <a href="index.php">Logout</a>
                                   </div>
                        </div>
                        </li>

						
					</ul>
				</div>
			</div>
        </nav>
        

		<div class="aboutComp">
			<div class="gap100"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="compContent">
							<h1 class="text-left">About Company</h1>
							<p>We are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfaction.We are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfactionWe are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfactionWe are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfaction.We are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfaction.We are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfactionWe are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfactionWe are the most oldest company growing up in kolkata.We provide you the bestest service for your satisfaction</p>
						</div>	
					</div>
					<div class="col-sm-4">
						<div class="compImg" style="background-image: url(picture/5.jpg);"></div>
					</div>
				</div>
			</div>
			<div class="gap100"></div>
		</div>
		<div class="whyUs">
			<div class="gap100"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<h1 class="text-left">Why Choose us</h1>
							<div class="gap20"></div>
							<h4><i class="fa fa-handshake-o"></i> We give Quick Service</h4>
							<h4><i class="fa fa-handshake-o"></i> We take all your responsibilities</h4>
							<h4><i class="fa fa-handshake-o"></i> We give you the best work</h4>
							<h4><i class="fa fa-handshake-o"></i> huge experience of working since 2004</h4>
							<h4><i class="fa fa-handshake-o"></i> Reasonable rate</h4>
							<h4><i class="fa fa-handshake-o"></i> Modern working style</h4>
							<h4><i class="fa fa-handshake-o"></i> Time respect</h4>
							<h4><i class="fa fa-handshake-o"></i> consultant services</h4>
							<div class="gap20"></div>
						</div> 

						<div class="col-sm-6">
							<h1 class="text-left">Our Services</h1>
							<div class="gap20"></div>
							<h4><i class="fa fa-handshake-o"></i>Home Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> New Home Construction</h4>
							<h4><i class="fa fa-handshake-o"></i> Exterior Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> Bathroom Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> Kitchen Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> Hardscape Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> Office Hall Decoration</h4>
							<h4><i class="fa fa-handshake-o"></i> Scholl Decoration</h4>
							
						</div>
						
					</div>
				</div>
			</div>
			<div class="gap100"></div>
		</div>
		<div class="footerBg">
			<div class="gap100"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="companyText">
							<h3>CompanyName</h3>
							<p>about The comapny details has to be written by themselve.about The comapny details has to be written by themselve.about The comapny details has to be written by themselve.</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="contact">
							<h3>Contacts</h3>
							<p style="padding-bottom: 20px;"><span><i class="fa fa-map-marker" style="font-size: 18px;"></i></span> 128/9 ray street kolkata-20</p>
							<p style="padding-bottom: 20px;"><span><i class="fa fa-envelope-o" style="font-size: 18px;"></i></span>  companyname@domain.com</p>
							<p style="font-size: 18px;"><span><i class="fa fa-phone" style="font-size: 18px;"></i></span>  033-12345678</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="form">
							<form>
								<h3 style="color: #777;">Join with us</h3>
								<input class="mailText" type="text" placeholder=" Enter your email id">
								<br><br>
								<input class="inpSubmit" type="submit" value="Submit">
								
							</form>
							<div class="social">
								<a href="javascript:;"><i class="fa fa-facebook-official"></i></a>
								<a href="javascript:;"><i class="fa fa-twitter"></i></a>
								<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gap100"></div>
			<div class="darkenLine"></div>
			<div class="gap40"></div>
			<div class="copyRight">
				<div class="container text-center">
					<p>&copy; 2019 CarHub</p>
				</div>
			</div>
			<div class="gap40"></div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>