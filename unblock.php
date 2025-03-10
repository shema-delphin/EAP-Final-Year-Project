<?php 
$conn=mysqli_connect("localhost","root","","sms");

$id=$_GET['id'];
$update=mysqli_query($conn,"UPDATE user SET status='allowed' WHERE id='$id'");

if ($update==true) {
	echo "<script>window.alert('User UnBlocked')</script>";
	include 'status.php';
}else{
	echo "<script>window.alert('User Blocked')</script>";
	include 'status.php';
	
}

 ?>
