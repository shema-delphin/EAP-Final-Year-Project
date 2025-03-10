<?php 
$conn=mysqli_connect("localhost","root","","sms");
$marks_id=$_GET['marks_id'];
$delete=mysqli_query($conn,"DELETE FROM marks_second_term WHERE marks_id='$marks_id'");


include 'viewmarksl3elc_second_term.php';


 ?>