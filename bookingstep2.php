


<?php
session_start();
include('connect.php');

$cartypeid = $_SESSION['cartype'];
$username = $_SESSION['username'];
$_SESSION['phoneno']=$_POST['phoneno'];
$_SESSION['location']=$_POST['location'];
$_SESSION['pDate']=$_POST['pDate'];
$_SESSION['rDate']=$_POST['rDate'];
$pHour=$_POST['pHour'];
$rHour=$_POST['rHour'];
$pMin=$_POST['pMin'];
$rMin=$_POST['rMin'];
$PamORpm=$_POST['PamORpm'];
$RamORpm=$_POST['RamORpm'];


$_SESSION['pTime']=$pHour.":".$pMin." ".$PamORpm;
$_SESSION['rTime']=$rHour.":".$rMin." ".$RamORpm;

$date1 = new DateTime($_POST['pDate']);
$date2 = new DateTime($_POST['rDate']);
$interval = $date1->diff($date2);
$bookDuration= $interval->days;

$sql1="SELECT * from carinfo where cartypeid='$cartypeid'";
    $result=mysqli_query($con,$sql1);
    $row= mysqli_fetch_array($result);
	$rent = $row['rent'] * $bookDuration;    //Rent for Car
	$nightcharge = 150*($bookDuration - 1);  //Overnight Charge
	$advamount=$row['advamount'] * $bookDuration;   //Total advance Amount
	$totrent= $rent + $nightcharge;   // Total Rent
	$dueamount = $totrent - $advamount; // Due amount

	$_SESSION['totalamount']= $totrent;
	$_SESSION['advamount'] = $advamount;
	$_SESSION['dueamount'] = $dueamount;
	
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
                                        <a href="mybookings.php">My Bookings</a>
                                        <a href="index.php">Logout</a>
                                   </div>
                        </div>
                        </li>

						
					</ul>
				</div>
			</div>
		</nav>






<div class="limiter">
    <div class="container-booking">
		<div class="wrap-book">
		    <div class="row">
			    <h3><?php echo $row['carname']; ?>[Rent: <?php echo $row['rent']; ?>/-]</h3>
				<hr>
			</div>
			<div class="col-sm-6">
			    <div class="row">
			        <h4>Pickup Date: <?php echo $_POST['pDate']; ?></h4>
					<h4>Pickup Time: <?php echo $_SESSION['pTime']; ?></h4>
			        <h4>Return Date:<?php echo $_POST['rDate']; ?></h4>
					<h4>Pickup Time: <?php echo $_SESSION['rTime']; ?></h4>
			        <h4>No of Days:<?php echo $bookDuration; ?></h4>
			        <br>
			    </div>
			    <div class="row">
               
                    <div class="btndetails">
                        <a href="booking.php?cartype=<?php echo $cartypeid ?>" class="fontWhite font20px">Edit</a>
		            </div>
            
			    </div>
			</div>
			<div class="col-sm-6">
			    <div class="row">
			        <h5>Car Charges:       <?php echo $rent; ?>/-</h5>
			        <h5>Overnight Charges: <?php echo $nightcharge; ?>/-</h5>
			        <h4>Total:             <?php echo $totrent; ?>/-</h4>
					<h3>To be paid in Advance: <?php echo $advamount; ?>/-<h3>
			        <hr>
			    </div>
			    <div class="row">
                <form method="post" action="bookingstep3.php">
                    <div class="btnbook">
                        <button name="payment" value="click" type="submit" id="makePayment" class="fontWhite font20px">Pay <?php echo $advamount; ?>/-</button>
		            </div>
                </form>
			    </div>
			</div>

        </div>
	</div>
</div>


<script>
document.getElementById("makePayment").addEventListener("click", function() {
  alert("Payment Successful!!!!!");
});
</script>



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