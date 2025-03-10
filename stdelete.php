<?php 
$conn=mysqli_connect("localhost","root","","sms");
$st_id=$_GET['st_id'];
$delete=mysqli_query($conn,"DELETE FROM student WHERE st_id='$st_id'");


include 'viewstudent.php';


 ?>