<?php 
$conn=mysqli_connect("localhost","root","","sms");


$second_id=$_POST['second_id'];
$st_id=$_POST['st_id'];
$ammount=$_POST['ammount'];
$paid=$_POST['paid'];
$total=$ammount-$paid;


if ($paid <= $ammount && $paid>0) {

	$update=mysqli_query($conn,"UPDATE second_term SET st_id='$st_id', ammount='$ammount', paid='$paid', total='$total' WHERE second_id='$second_id'");

	if ($update==1) {
		include 'viewsecondl4sod.php';
	}

}else{
		echo "Not Updated";
	}
 ?>