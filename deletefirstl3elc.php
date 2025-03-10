<?php 
$conn=mysqli_connect("localhost","root","","sms");
$first_id=$_GET['first_id'];
$delete=mysqli_query($conn,"DELETE FROM first_term WHERE first_id='$first_id'");


include 'viewfirstl3elc.php';


 ?>