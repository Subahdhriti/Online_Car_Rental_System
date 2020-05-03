<?php
session_start();
session_unset();
session_destroy();

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact Us :: Car Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">


	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		
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
						<li><a href="index.php">Home</a></li>
						<li><a href="cars.php">Cars</a></li>
						<li><a href="contact-us.php">Contact Us</a></li>
						<li><a href="login.php">LOGIN</a></li>

						
					</ul>
				</div>
			</div>
		</nav>
		<div class="banner" style="background-image: url(picture/contact-banner.png);">
			<h1>Contact Us</h1>
			<div class="gap150"></div>

		</div>



		<!-- Contacts -->>
			
		<div class="contactDetails text-center">
			<div class="gap40"></div>
			<div class="container" >
				<div class="row">
					<div class="col-sm-4 bottomMargin">
						<div class="contactBox">
							<div class="address">
								<i class="fa fa-map-marker"></i>
								<h4 class="textWhite">Address</h4>
								<div class="whiteLine"></div>
								<div class="gap10"></div>
								<p class="textWhite">NIT Rourkela</p>
								<p class="textWhite">Sector-1</p>
								
							</div>	
						</div>
					</div>
					<div class="col-sm-4 bottomMargin">
						<div class="contactBox bottomMargin">
							<div class="phone">
								<i class="fa fa-phone-square"></i>
								<h4 class="textWhite">Phone</h4>
								<div class="whiteLine"></div>
								<div class="gap10"></div>
								<p class="textWhite">1234567890</p>
								
							</div>	
						</div>
					</div>
					<div class="col-sm-4 bottomMargin">
						<div class="contactBox">
							<div class="email">
								<i class="fa fa-envelope-o"></i>
								<h4 class="textWhite">E-mail Id</h4>
								<div class="whiteLine"></div>
								<div class="gap10"></div>
								<p class="textWhite">subhadhritimaikap@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gap100"></div>
		</div>
		<div class="clientDetails">
			<div class="gap100"></div>
			<div class="container">
				<h1 class="text-center textGray">Get in touch with us</h1>
				<div class="grayLine"></div>
				<div class="gap40"></div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-horizontal form-padding">
							<input type="text" class="form-control formColor" id="firstName" placeholder="First Name">
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-horizontal form-padding">
							<input type="text" class="form-control formColor" id="lastName" placeholder="Last Name">
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-horizontal form-padding">
							<input type="text" class="form-control formColor" id="email" placeholder="Phone number">
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-horizontal form-padding">
							<input type="text" class="form-control formColor" id="phone" placeholder="Email Id">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-horizontal form-padding">
							<textarea class="form-control formColor" id="message" placeholder="Give your Massage"></textarea>
						</div>
					</div>	
				</div>
				<input class="inpPosition inpSubmit" type="submit" value="submit">
			</div>
		</div>



		<!-- Footer -->
		<div class="footerBg">
			<div class="gap100"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="companyText">
							<h3> CAR HUB</h3>
							<p>Car Rental Company</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="contact">
							<h3>Contacts</h3>
							<p style="padding-bottom: 20px;"><span><i class="fa fa-map-marker" style="font-size: 18px;"></i></span> NIT Rourkela, Sector-1</p>
							<p style="padding-bottom: 20px;"><span><i class="fa fa-envelope-o" style="font-size: 18px;"></i></span>  subhadhritimaikap@gmail.com</p>
							<p style="font-size: 18px;"><span><i class="fa fa-phone" style="font-size: 18px;"></i></span>1234567890</p>
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
							
						</div>
					</div>
				</div>
			</div>
			<div class="gap100"></div>
			<div class="darkenLine"></div>
			<div class="gap40"></div>
			<div class="copyRight">
				<div class="container text-center">
					<p>&copy; 2019 CAR HUB</p>
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