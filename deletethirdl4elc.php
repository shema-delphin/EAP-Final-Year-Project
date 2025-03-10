<?php 
$conn=mysqli_connect("localhost","root","","sms");
$third_id=$_GET['third_id'];
$delete=mysqli_query($conn,"DELETE FROM third_term WHERE third_id='$third_id'");


include 'viewthirdl4elc.php';


 ?>