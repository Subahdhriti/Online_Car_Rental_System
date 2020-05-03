<?php
session_start();
include('connect.php');
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Book-1 :: Car Hub</title>

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


<?php
	 $cartypeid = $_GET['cartype'];   //The type of car a user want to book
	 $_SESSION['cartype']=$cartypeid;
	
?>


<?php 		
	$sql="SELECT * from carinfo where cartypeid='$cartypeid'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
			
?>


<div class="limiter">
    <div class="container-booking">
		<div class="wrap-book">
            
			<div class="text-center">
			<div class="container">
				
				<div class="row container text-center">
					<div class="col-sm-3 productMargin">
						<div class="productImage" style="background-image: url(<?php echo $row['imgsrc']; ?>);">
							
						</div>
					</div>
					<div class="col-sm-4">
							<div class="row text-left">

									<div class="col-sm-12 text-left"><h3><?php echo $row['carname']; ?></h3></div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-5">
									<div class="text-left"><h4><?php echo $row['seatno']; ?> Seater</h4></div>
									<div class="text-left"><h4>Manual</h4></div>
									<div class="text-left"><h4><?php echo $row['bagno']; ?> Bags</h4></div>
									<div class="text-left"><h4>Age Limit: <?php echo $row['agelim']; ?>+</h4></div>
                                </div>
					            <div class="col-sm-6">
							        <div class="row text-left">
							            <div class="col-sm-3 gap20 "> </div>
                                            <h3><img src="picture/icons/rupee.svg" height="30px" width="15px"><?php echo $row['rent']; ?></h3>
							            </div>

							        <div class="row text-left">
							            <div class="col-sm-1 gap20"> </div>
							        <div class="col-sm-9 text-left"><h5>Excess Rs <?php echo $row['excesscharge']; ?>/km</h5></div>
							    </div>
							</div>
					</div>
				</div>
				
						
		</div>
		</div>






                        <form method="post" action="bookingstep2.php">
							<div class="row">
						
							</div>
							<div class="form-group">
								<input name="phoneno" class="input100" type="tel" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
							</div>
							<div class="form-group">
								<select name="location" class="input100" type="text" placeholder="Select Pick Up Location " required>
													<option>Select Pick Up Location</option>
													<option>NIT Rourkela</option>
													<option>Sector 2</option>
													<option>Rourkela Station</option>
								</select>
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input name="pDate" class="input100" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select name="pHour" class="input100">
												    <option></option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select name="pMin" class="input100">
													<option>00</option>
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select name="PamORpm" class="input100">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Return Date</span>
										<input name="rDate" class="input100" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select name="rHour" class="input100">
												    <option></option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select name="rMin" class="input100">
													<option>00</option>
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select name="RamORpm" class="input100">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btnnextstep">
								<button type="submit" class="fontWhite font20px">Next Step</button>
							</div>
						</form>

        </div>

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