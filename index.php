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
		<title>Home :: Car Hub</title>

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
					<div class="logo " ><img src="picture/logo.png"></div>
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




		<!--Slider-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Content for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active itmeImg" style="background-image: url(picture/Slider/s-a.jpg);">
				
					<div class="col-sm-6 col-sm-offset-3 headerText text-left">
						<h1 style="color:darkslategray">DRIVE IN THE CITY & OUTSTATION</h1>
						<p style="color: darkslategray">Self Drive Car Rental</p>
						<div class="btn">
							<a href="cars.php">Get Started</a>
						</div>
					</div>
					
				</div>
				<div class="item itmeImg" style="background-image: url(picture/Slider/s-b.jpg);">
					
					<div class="col-sm-6 col-sm-offset-3 headerText text-right">
						<h1 style="color:darkslategray">DRIVE IN THE CITY & OUTSTATION</h1>
						<p style="color: darkslategray">Self Drive Car Rental</p>
						<div class="btn">
							<a href="cars.php">Get Started</a>
						</div>
					</div>
				
					
				</div>
				<div class="item itmeImg" style="background-image: url(picture/Slider/s-c.jpg);">
									
					<div class="col-sm-6 col-sm-offset-3 headerText text-right">
						<h1 style="color:darkslategray">DRIVE IN THE CITY & OUTSTATION</h1>
						<p style="color: darkslategray">Self Drive Car Rental</p>
						<div class="btn">
							<a href="cars.php">Get Started</a>
						</div>
					</div>
					
					
				</div>
				
			 </div>
           
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
		<div class="gap100"></div>

		<!--Advantages-->
		<div class="container text-center">

			<h1>THE CARHUB ADVANTAGES</h1>
			<div class="ofgreyLine"></div>
			<div class="gap40"></div>
			<div class="WhoMatterBg">
				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/fuel.png); width: 58px; height: 70px; margin-left: 100px;"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/zoom.png); width: 100px; height: 70px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">No Hidden Charges</P>
					<div class="gap10"></div>
					<p>Our prices include taxes and insurance. What you see is what you really pay!</p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/box.png); width: 110px; height: 80px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Flexible Price</P>
					<div class="gap10"></div>
					<p>One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/location.png); width: 60px; height: 75px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Go Anywere</P>
					<div class="gap10"></div>
					<p>Our cars have all-India permits. Just remember to pay state tolls and entry taxes.</p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/road.png); width: 110px; height: 80px; margin-left: 100px"></div>
					<P style="font-size: 20px; color: #BD650A;">24-7 Assistence</P>
					<div class="gap10"></div>
					<p>We have round-the-clock, pan India partners. Help is never far away from you.</p>
					
				</div>
				
				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/car.png); width: 100px; height: 70px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Damage Insurance</P>
					<div class="gap10"></div>
					<p>All your bookings include damage insurance! Drive safe, but don’t worry!</p>
					
				</div>
				
				<div class="clear"></div>
			</div>
				<div class="clear"></div>
		</div>
		



		<!-- Popular Cars-->
		<div class="text-center">
			<div class="container">
				<div class="gap100"></div>
				<h1>Our Popular Cars</h1>
				<div class="brownLine"></div>
				<div class="gap40"></div>
				<div class="row">
					<div class="col-sm-3">
						<div class="productImg" style="background-image: url(picture/Cars/amba.jpg);">
							<h4  >Ambassador</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="productImg" style="background-image: url(picture/Cars/sumo.jpg);">
							<h4>Tata Sumo</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="productImg" style="background-image: url(picture/Cars/omni.jpg);">
							<h4>Maruti Omni</h4>				
						</div>
					</div>
					<div class="col-sm-3 col-xs-6 productMargin">
						<div class="productImg" style="background-image: url(picture/Cars/esteem.jpg);">
							<h4>Maruti Esteem</h4>	
						</div>
					</div>
					<div class="col-sm-3 col-xs-6 productMargin">
						<div class="productImg" style="background-image: url(picture/Cars/armada.jpg);">
							<h4>Mahindra Armada</h4>
						</div>
					</div>
				</div>
				<div class="gap20"></div>
				<div class="btn">
				<a href="cars.php">View all</a>
			    </div>
			</div>
			<div class="gap100"></div>
			
		</div>
		




		<!--Who CarHub Works-->
		<div class="container whoWeAreBg text-center">
			 
			<div class="gap100"></div>
			<h1>HOW CARHUB WORKS</h1>
			<div class="ofgreyLine"></div>
			<div class="gap40"></div>
			<div class="WhoMatterBg">
				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/fuel.png); width: 58px; height: 70px; margin-left: 100px;"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/zoom.png); width: 100px; height: 70px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/box.png); width: 100px; height: 70px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/road.png); width: 110px; height: 80px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/car.png); width: 110px; height: 80px; margin-left: 80px"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>

				<div class="WhoTextBg text-center">
					<div class="item itmeImg" style="background-image:url(picture/logos/location.png); width: 60px; height: 75px; margin-left: 100px"></div>
					<P style="font-size: 20px; color: #BD650A;">Fuel Cost Included</P>
					<div class="gap10"></div>
					<p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!  </p>
					
				</div>
				
				<div class="clear"></div>
			</div>
				<div class="clear"></div>
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