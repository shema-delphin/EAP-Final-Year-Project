<?php 
$conn=mysqli_connect("localhost","root","","sms");
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM user WHERE id='$id'");


include 'userview.php';


 ?>