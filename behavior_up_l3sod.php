

<?php 

$conn=mysqli_connect("localhost","root","","sms");

$behavior_id=$_POST['behavior_id'];
$department_name=$_POST['department_name'];
$level=$_POST['level'];
$st_id=$_POST['st_id'];
$behavior_first_marks=$_POST['behavior_first_marks'];
$behavior_second_marks=$_POST['behavior_second_marks'];
$behavior_third_marks=$_POST['behavior_third_marks'];



if ($behavior_first_marks<=40 && $behavior_first_marks>=0) {
if ($behavior_second_marks<=40 && $behavior_second_marks>=0) {
if ($behavior_third_marks<=40 && $behavior_third_marks>=0) {


	

$update=mysqli_query($conn,"UPDATE behavior SET department_name='$department_name', level='$level', st_id='$st_id', behavior_first_marks='$behavior_first_marks', behavior_second_marks='$behavior_second_marks', behavior_third_marks='$behavior_third_marks' WHERE behavior_id='$behavior_id'");

	if ($update==1) {
		include 'behavior_view_l3sod.php';
	}else{
		echo "Not Update";
	}


	
}else{
	echo "<script>window.alert('Check First Behavior Marks !!!!!');</script>";
}
}else{
	echo "<script>window.alert('Check Second Behavior Marks !!!!!');</script>";
}
}else{
	echo "<script>window.alert('Check Third Behavior Marks !!!!!');</script>";
}



 ?>

 