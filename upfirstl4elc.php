<?php 
$conn=mysqli_connect("localhost","root","","sms");


$first_id=$_POST['first_id'];
$st_id=$_POST['st_id'];
$ammount=$_POST['ammount'];
$paid=$_POST['paid'];
$total=$ammount-$paid;


if ($paid <= $ammount && $paid>0) {

	$update=mysqli_query($conn,"UPDATE first_term SET st_id='$st_id', ammount='$ammount', paid='$paid', total='$total' WHERE first_id='$first_id'");

	if ($update==1) {
		include 'viewfirstl4elc.php';
	}

}else{
		echo "Not Updated";
	}
 ?>