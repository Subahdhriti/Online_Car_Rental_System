


<?php
session_start();
include('connect.php');

$userid=$_SESSION['username'];



$sql1="SELECT * from bookings where userid='$userid' order by bookingid desc";
	$result=mysqli_query($con,$sql1);


	
	
	
	
?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Book-2 :: Car Hub</title>

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
                                        <a href="#">My Bookings</a>
                                        <a href="index.php">Logout</a>
                                   </div>
                        </div>
                        </li>

						
					</ul>
				</div>
				
			</div>
		</nav>



<div class="limiter">
<h1 class="text-center">Your Bookings</h1>
<div class="brownLine"></div>
    <div class="container-booking">
	


<?php

while ($row = mysqli_fetch_array($result)) {

	$totalamount = $row['totamount'];
	$cartype = $row['carid'];
	$sql2 = "SELECT carname FROM carinfo where cartypeid='$cartype'";  
	$result2=mysqli_query($con,$sql2);
	$row2 = mysqli_fetch_array($result2);
	$carname = $row2['carname'];



	?>

		<div class="wrap-bookings">
		    <div class="row">
			    <h3><?php echo $carname; ?></h3>
				<hr>
			</div>
			                                    <div class="row">
			<div class="col-sm-6">
			    <div class="row">
				    <h4>Booking ID: <?php echo $row['bookingid']; ?></h4>
					<br>
				    <h4>Phone No: <?php echo $row['phoneno']; ?></h4>
					<br>
			        <h4>Pickup Date: <?php echo $row['pdate']; ?></h4>
					<br>
			        <h4>Return Date:<?php echo $row['rdate']; ?></h4>
			        <br>
					<h4>Location:<?php echo $row['location']; ?></h4>
			       
			    </div>
			    <div class="row">
                     <br>
                    <div class="btndetails">
                        <a href="cars2.php" class="fontWhite font20px">Book More Car</a>
		            </div>
            
			    </div>
			</div>
			<div class="col-sm-6">
			    <div class="row">
				    <h4>Pickup Time: <?php echo $row['prefpicktime']; ?></h4>
					<br>
					<h4>Return Time: <?php echo $row['prefreturntime']; ?></h4>
					<br>
					<h4>Amount Paid:<?php echo $row['amountpaid']; ?>/-</h4>
			        <br>
					<h4>Amount Due:<?php echo $row['amountdue']; ?>/-</h4>
			        <hr>
			    </div>
			    <div class="row">

				<?php
				   if($row['iscancelled'] == 0 && $row['isreturned']==0)
				   {
				  ?>
                <form method="post" action="#">
				     <div class="col-sm-6">
                    <div class="btnbook">
                        <button name="payment" value="click" type="submit" id="makePayment" class="fontWhite font20px">Pay <?php echo $row['amountdue']; ?>/-</button>
		            </div></div>
					<div class="col-sm-6">
					<div class="btncancel">
                        <a href="cancel.php?bookid=<?php echo $row['bookingid'] ?>" class="fontWhite font20px">Cancel</a>
		            </div></div>
				</form>

				<?php
				   }
				   elseif($row['isreturned']==1){
				?>
				<div class="fontGreen"><h3>CLOSED</h3></div>
				<?php
				   }
				?>
				<?php
				   
				if($row['iscancelled'] == 1){
				?>
				<div class="fontRed"><h3>CANCELLED</h3></div>
				<?php
				   }
				?>
			   </div>
			</div> 
		                                       </div>
			<div class="row">
				<hr>
				  <?php
				  if($row['ispicked']==1){
				  ?>
				    <h5>------ Car Picked Up (<?php echo $row['actualpick'] ?>)</h5>
					<?php
					if($row['isreturned']==1){
						?>
					<h5>------ Car Returned (<?php echo $row['actualreturn'] ?>)</h5>
					<?php
					   }
					?>
					<?php
					 }
					 else
					 {
					?>
                    <h5>------ Car Not Picked Up-----</h5>
					<?php
					 }
					?>
			</div>
			   
        </div>

<?php } ?>

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
        
	</body>
</html>