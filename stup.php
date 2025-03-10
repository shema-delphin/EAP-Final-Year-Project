<?php 
$conn=mysqli_connect("localhost","root","","sms");

$st_id=$_POST['st_id'];
$student_code=$_POST['student_code'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$idnumber=$_POST['idnumber'];
$province=$_POST['province'];

$district=$_POST['district'];
$sector=$_POST['sector'];
$cell=$_POST['cell'];
$village=$_POST['village'];

$school=$_POST['school'];
$department=$_POST['department'];
$level3=$_POST['level3'];
$level4=$_POST['level4'];
$level5=$_POST['level5'];
$position=$_POST['position'];

	$update=mysqli_query($conn,"UPDATE student SET student_code='$student_code', firstname='$firstname', lastname='$lastname', gender='$gender', dob='$dob', email='$email', phone='$phone', idnumber='$idnumber', province='$province', district='$district', sector='$sector', cell='$cell', village='$village', school='$school', department='$department', level3='$level3', level4='$level4', level5='$level5', position='$position' WHERE st_id='$st_id'");

	if ($update==true) {
		include 'viewstudent.php';
	}else{
		echo "<script>window.alert('Student Not Update');</script>";
	}
 ?>