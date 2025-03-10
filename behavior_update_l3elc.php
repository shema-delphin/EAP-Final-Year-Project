
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>

<?php 
$conn=mysqli_connect("localhost","root","","sms");
$behavior_id=$_GET['behavior_id'];
$select=mysqli_query($conn,"SELECT * FROM behavior WHERE behavior_id='$behavior_id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


	$behavior_id=$data['behavior_id'];
	$department_name=$data['department_name'];
	$level=$data['level'];
	$st_id=$data['st_id'];
	$behavior_first_marks=$data['behavior_first_marks'];
	$behavior_second_marks=$data['behavior_second_marks'];
	$behavior_third_marks=$data['behavior_third_marks'];
}
 ?>

<?php
include('includes/config.php');

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


<style>
	body{
		background-color:#efefef;
		
	}
</style>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/annumateur_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="behavior_up_l3elc.php" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Update Behavior Marks Level3 ELC</h3></center>
				</div><br>
				<div class="card-body">
						Behavior Id
						<input type="text" name="behavior_id" readonly=""  class="form-control" value="<?php echo $behavior_id ?>">
						<br>
					
						Department Name
						<input type="text" name="department_name" readonly=""  class="form-control" value="<?php echo $department_name ?>">
						<br>


						Level
						<input type="text" name="level" readonly=""  class="form-control" value="<?php echo $level ?>">
						<br>

						Student Id
						<input type="text" name="st_id" readonly=""  class="form-control" value="<?php echo $st_id ?>">
						<br>


						Behavior First Term Marks /40
						<input type="text" name="behavior_first_marks" required  class="form-control" value="<?php echo $behavior_first_marks ?>">
						<br>

						Behavior Second Term Marks /40
						<input type="text" name="behavior_second_marks" required  class="form-control" value="<?php echo $behavior_second_marks ?>">
						<br>

						Behavior Third Term Marks /40
						<input type="text" name="behavior_third_marks" required  class="form-control" value="<?php echo $behavior_third_marks ?>">
	

				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Update Marks</button></center>
						</div>
						<div class="col-md-6">
							<center><button class="btn btn-block btn-danger">Cancel</button></center>
						</div>
					</div>

				</div>
			</div>

			</form>



		</div>
		<div class="col-md-4"></div>
		
</div>
</div>
</div>
</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>
</html>


<?php
}else{
	header('location:login.php');
}
?>










<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","sms");

$department_name=$_POST['department_name'];
$level=$_POST['level'];
$st_id=$_POST['st_id'];
$behavior_first_marks=$_POST['behavior_first_marks'];
$behavior_second_marks=$_POST['behavior_second_marks'];
$behavior_third_marks=$_POST['behavior_third_marks'];



if ($behavior_first_marks<=40 && $behavior_first_marks>=0) {
if ($behavior_second_marks<=40 && $behavior_second_marks>=0) {
if ($behavior_third_marks<=40 && $behavior_third_marks>=0) {
	

$insert=mysqli_query($conn,"INSERT INTO behavior VALUES('','$department_name','$level','$st_id','$behavior_first_marks','$behavior_second_marks','$behavior_third_marks')");
if ($insert==1) {
	echo "<script>window.alert('Marks Inserted');</script>";
}else{
	echo "<script>window.alert('Marks Not Inserted');</script>";
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


}
 ?>

 