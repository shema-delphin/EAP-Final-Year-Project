<?php 
$conn=mysqli_connect("localhost","root","","sms");

	$module_id=$_POST['module_id'];
	$department_name=$_POST['department_name'];
	$level=$_POST['level'];
	$module_code=$_POST['module_code'];
	$module_name=$_POST['module_name'];
	$module_hours=$_POST['module_hours'];
	$module_credit=$_POST['module_credit'];

	$update=mysqli_query($conn,"UPDATE modules SET department_name='$department_name', level='$level', module_code='$module_code', module_name='$module_name', module_hours='$module_hours', module_credit='$module_credit' WHERE module_id='$module_id'");

	if ($update==true) {
		include 'viewcoursel3elc.php';
	}else{
		echo "Not Updated";
	}
 ?>