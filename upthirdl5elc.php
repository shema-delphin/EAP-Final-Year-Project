<?php 
$conn=mysqli_connect("localhost","root","","sms");


$third_id=$_POST['third_id'];
$st_id=$_POST['st_id'];
$ammount=$_POST['ammount'];
$paid=$_POST['paid'];
$total=$ammount-$paid;


if ($paid <= $ammount && $paid>0) {

	$update=mysqli_query($conn,"UPDATE third_term SET st_id='$st_id', ammount='$ammount', paid='$paid', total='$total' WHERE third_id='$third_id'");

	if ($update==1) {
		include 'viewthirdl5elc.php';
	}

}else{
		echo "Not Updated";
	}
 ?>