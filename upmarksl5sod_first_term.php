
<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","sms");


$marks_id=$_POST['marks_id'];
$department_name=$_POST['department_name'];
$level=$_POST['level'];
$st_id=$_POST['st_id'];
$module_id=$_POST['module_id'];
$formative=$_POST['formative'];
$summative=$_POST['summative'];
$total_marks=$formative+$summative;



if ($formative<=50 && $formative>=0) {
	
if ($summative<=50 && $summative>=0) {


$update=mysqli_query($conn,"UPDATE marks_first_term SET department_name='$department_name', level='$level', st_id='$st_id', module_id='$module_id', formative='$formative', summative='$summative', total_marks='$total_marks' WHERE marks_id='$marks_id'");

	if ($update==1) {
		include 'viewmarksl5sod_first_term.php';
	}else{
		echo "<script>window.alert('Not Update');</script>";
	}


	
}else{
	echo "<script>window.alert('Check The Marks You Intered in Summative');</script>";
}


}else{
	echo "<script>window.alert('Check The Marks You Intered in Formative');</script>";
}


}
 ?>
