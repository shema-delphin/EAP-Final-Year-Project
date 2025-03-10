<?php 
$conn=mysqli_connect("localhost","root","","sms");
$marks_id=$_GET['marks_id'];
$delete=mysqli_query($conn,"DELETE FROM marks_third_term WHERE marks_id='$marks_id'");


include 'viewmarksl5elc_third_term.php';


 ?>