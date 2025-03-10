<?php 
$conn=mysqli_connect("localhost","root","","sms");

$par_id=$_POST['par_id'];
$st_id=$_POST['st_id'];
$fathername=$_POST['fathername'];
$fatherphone=$_POST['fatherphone'];
$fathernid=$_POST['fathernid'];
$fatherdob=$_POST['fatherdob'];

$mathername=$_POST['mathername'];
$matherphone=$_POST['matherphone'];
$mathernid=$_POST['mathernid'];
$matherdob=$_POST['matherdob'];
$emergency=$_POST['emergency'];

	$update=mysqli_query($conn,"UPDATE parents SET st_id='$st_id', fathername='$fathername', fatherphone='$fatherphone', fathernid='$fathernid', fatherdob='$fatherdob', mathername='$mathername', matherphone='$matherphone', mathernid='$mathernid', matherdob='$matherdob', emergency='$emergency' WHERE par_id='$par_id'");

	if ($update==true) {
		include 'viewparent.php';
	}else{
		echo "<script>window.alert('Student Not Update');</script>";
	}
 ?>