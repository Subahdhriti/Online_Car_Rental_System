<?php
session_start();
include('connect.php');

$bookingid = $_GET['bookid'];

$sql3="SELECT * from bookings where bookingid='$bookingid'";
$result3=mysqli_query($con,$sql3);
$row3 = mysqli_fetch_array($result3);
$carid = $row3['carid'];

$sql="UPDATE bookings set iscancelled=1 where bookingid='$bookingid'";
$result=mysqli_query($con,$sql);
if($result==1){
    $sql2= "UPDATE carrent SET avlcar = avlcar +1 where carname='$carid'";
    $result2=mysqli_query($con,$sql2);
    ?>
    <script> alert("Booking Cancelled!!!!!") </script>
    <?php
    echo '<script> location.href="mybookings.php"</script>';
    exit();
}

?>