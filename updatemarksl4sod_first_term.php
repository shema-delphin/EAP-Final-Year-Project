
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>



<?php 
$conn=mysqli_connect("localhost","root","","sms");
$marks_id=$_GET['marks_id'];
$select=mysqli_query($conn,"SELECT * FROM marks_first_term WHERE marks_id='$marks_id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


	$marks_id=$data['marks_id'];
	$department_name=$data['department_name'];
	$level=$data['level'];
	$st_id=$data['st_id'];
	$module_id=$data['module_id'];
	$formative=$data['formative'];
	$summative=$data['summative'];
	$total_marks=$data['total_marks'];
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
		<?php include('includes/level4sod_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="upmarksl4sod_first_term.php" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Update Marks Level4 SOD</h3></center>
				</div><br>
				<div class="card-body">
					Id
					<input type="text" name="marks_id" readonly=""  class="form-control" value="<?php echo $marks_id ?>">

					Department
					<input type="text" name="department_name" readonly="" required  class="form-control" value="<?php echo $department_name ?>">
					
					<br>
					Class Level
					<input type="text" name="level" required readonly=""  class="form-control" value="<?php echo $level ?>">
					<br>
					Student Id
					<input type="text" name="st_id" required readonly=""  class="form-control" value="<?php echo $st_id ?>">
					<br>
					Module
					<input type="text" name="module_id" required readonly=""  class="form-control" value="<?php echo $module_id ?>">
					
					<br>
					

						Formative Marks /50
						<input type="text" name="formative" required  class="form-control" value="<?php echo $formative ?>">
						<br>
						Summative Marks /50
						<input type="text" name="summative" required  class="form-control" value="<?php echo $summative ?>">
						<br>
						<input type="text" name="total" readonly=""  class="form-control" value="<?php echo $total_marks ?>">
					



				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Upadate</button></center>
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

