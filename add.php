
<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","sms");

$code=$_POST['code'];
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

$marks=$_POST['marks'];
$school=$_POST['school'];
$department=$_POST['department'];
$class=$_POST['class'];

$insert=mysqli_query($conn,"INSERT INTO student VALUES($code','$firstname','$lastname','$gender','$dob','$email','$phone','$idnumber','$province','$district','$sector','$cell','$village','$marks','$school','$department','$class')");
if ($insert==1) {
	echo "Student Inserted";
}else{
	echo "Student Not Inserted";
}
}
 ?>