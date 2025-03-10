<?php 
$conn=mysqli_connect("localhost","root","","sms");
$second_id=$_GET['second_id'];
$delete=mysqli_query($conn,"DELETE FROM second_term WHERE second_id='$second_id'");


include 'viewsecondl4elc.php';


 ?>