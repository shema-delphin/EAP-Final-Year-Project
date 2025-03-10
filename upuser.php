<?php 
$conn=mysqli_connect("localhost","root","","sms");

	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$nid=$_POST['nid'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$update=mysqli_query($conn,"UPDATE user SET firstname='$firstname', lastname='$lastname', gender='$gender', phone='$phone', nid='$nid', username='$username', password='$password' WHERE id='$id'");

	if ($update==true) {
		include 'userview.php';
	}else{
		echo "Not Updated";
	}
 ?>