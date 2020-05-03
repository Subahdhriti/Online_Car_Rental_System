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
		<title>Cars :: Car Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">


	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Style for Dropdown --> 
	<link rel="stylesheet" type="text/css" href="css/dropdownstyle.css">
    <!-- Font Color -->
	<link rel="stylesheet" type="text/css" href="css/fontcolor.css">

		
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





		<!-- Car Book -->

		<div class="text-center">
			<div class="container">
				<div class="gap100"></div>
				<h1>Our Popular Cars</h1>
				<div class="brownLine"></div>
				<div class="gap40"></div>
			</div>
		</div>

		<?php 
		
		$sql2 = "SELECT COUNT(*) FROM carinfo";
		$result2=mysqli_query($con,$sql2);
		$row = mysqli_fetch_array($result2);
		$noofrows = $row[0];
		
		for($i=1;$i<=$noofrows;$i++) { 
			
			$sql="SELECT * from carinfo where id='$i'";
			$result=mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			
			?>

		<div class="text-center">
			<div class="container">
				
				<div class="row container text-center">
					<div class="col-sm-3 productMargin">
						<div class="productImage" style="background-image: url(<?php echo $row['imgsrc']; ?>);">
							
						</div>
					</div>
					<div class="col-sm-7">
							<div class="row text-left">

									<div class="col-sm-6"><h3><?php echo $row['carname']; ?></h3></div>
									<div class="col-sm-5 text-right"><h3></h3></div>
							</div>
							<hr>
							<div class="row">
									<div class="col-sm-2 verline text-left"><h4><?php echo $row['seatno']; ?> Seater</h4></div>
									<div class="col-sm-2 verline text-left"><h4>Manual</h4></div>
									<div class="col-sm-2 verline text-left"><h4><?php echo $row['bagno']; ?> Bags</h4></div>
									<div class="col-sm-3 verline text-left"><h4>Age Limit: <?php echo $row['agelim']; ?>+</h4></div>
									<div class="verline">
                                    </div>
							</div>
							<hr>
							<div class="row">
									<div class="btndetails">
											<a href="#">Details</a>
										 </div>
							</div>
					</div>
					<div class="col-sm-2">
							<div class="row">
							<div class="col-sm-1 gap20"> </div>
                                <h3><img src="picture/icons/rupee.svg" height="30px" width="15px"><?php echo $row['rent']; ?></h3>
							</div>
                            <hr>
							<div class="row">
							<div class="col-sm-1 gap20"> </div>
							         <div class="col-sm-9 text-left"><h5>Excess Rs <?php echo $row['excesscharge']; ?>/km</h5></div>
							</div>
                            <hr>
                            <div class="row">
								<div>
								<!-- Check Availability -->
								<?php 
								$cartypeid = $row['cartypeid'];
			                    $sql3="SELECT avlcar from carrent where carname='$cartypeid'";
		                        $avlblresult=mysqli_query($con,$sql3);
			
			                    $avlblrow= mysqli_fetch_array($avlblresult);
			                    $noavlcar = $avlblrow[0];
			
			                    if($noavlcar>0){?>
								      <a href="booking.php?cartype=<?php echo $row['cartypeid'] ?>" class="btnbook font20px fontWhite" target="_blank" >Book</a>
								<?php } ?>
								<?php
			                    if($noavlcar==0) { ?>	
				                    <h4 class="fontRed">Not Available</h4>
								<?php } ?>
		
							       
								   
						        </div>
							</div>

							</div>
					</div>
				</div>
				
						
				</div>
			</div>
			<div class="gap100"></div>
		</div>
		<?php } ?>











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
	</body>
</html>