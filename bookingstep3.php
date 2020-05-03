
<?php
session_start();
include('connect.php');

$cartypeid=$_SESSION['cartype'];
$userid=$_SESSION['username'];
$phone=$_SESSION['phoneno'];
$location=$_SESSION['location'];
$pDate=$_SESSION['pDate'];
$rDate=$_SESSION['rDate'];


$pTime=$_SESSION['pTime'];
$rTime=$_SESSION['rTime'];

$totamount = $_SESSION['totalamount'];
$paidamount=$_SESSION['advamount'];
$dueamount=$_SESSION['dueamount'];


if(isset($_SESSION['cartype']) && isset($_SESSION['username'])){
    $sql1="INSERT INTO bookings (bookingid, userid, phoneno, carid, totamount, amountpaid, amountdue, pdate, rdate, prefpicktime, prefreturntime, location) 
    VALUES (NULL, '$userid', '$phone', '$cartypeid', '$totamount', '$paidamount', '$dueamount', '$pDate', '$rDate', '$pTime', '$rTime', '$location')";
    $result=mysqli_query($con,$sql1);

    if($result==1){
        $sql2= "UPDATE carrent SET avlcar = avlcar -1 where avlcar>0";
        $result2=mysqli_query($con,$sql2);
        ?>
        
        <?php
        echo '<script> location.href="mybookings.php"</script>';
        exit();
    }
    else{
        echo "Something went Wrong!!!!!";
        exit();
    }
}