<?php 
$conn=mysqli_connect("localhost","root","","sms");

$id=$_GET['id'];
$update=mysqli_query($conn,"UPDATE user SET status='blocked' WHERE id='$id'");

if ($update==true) {
	echo "<script>window.alert('UserBlocked')</script>";
	include 'status.php';
}else{
	echo "<script>window.alert('User Not Blocked')</script>";
	include 'status.php';
	
}

 ?>