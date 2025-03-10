<?php 
$conn=mysqli_connect("localhost","root","","sms");
$par_id=$_GET['par_id'];
$delete=mysqli_query($conn,"DELETE FROM parents WHERE par_id='$par_id'");


include 'viewparent.php';


 ?>