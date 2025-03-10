<?php 
$conn=mysqli_connect("localhost","root","","sms");
$behavior_id=$_GET['behavior_id'];
$delete=mysqli_query($conn,"DELETE FROM behavior WHERE behavior_id='$behavior_id'");


include 'behavior_view_l3sod.php';


 ?>