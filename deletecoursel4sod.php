<?php 
$conn=mysqli_connect("localhost","root","","sms");
$module_id=$_GET['module_id'];
$delete=mysqli_query($conn,"DELETE FROM modules WHERE module_id='$module_id'");


include 'viewcoursel4sod.php';


 ?>