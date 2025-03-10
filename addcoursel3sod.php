
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
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
		background-color:#b7b6b7;
		
	}
</style>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/level3sod_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Add Courses Level3 SOD</h3></center>
				</div><br>
				<div class="card-body">
					Department
					<select name="department_name" class="form-control">
					<option>Select Department</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT department_name FROM department where department_name='SOD'";
                        $query=mysqli_query($conn,$select);
                        while ($data=mysqli_fetch_array($query)) {
                        ?>
                        	<option value="<?php echo $data['department_name'] ?>">
                        		           <?php echo $data['department_name'] ?>
                        		
                        	</option>
                        <?php
                        }
						?>
					</select>
					
					<br>
					Class Level
					<select name="level" class="form-control">
						<option>Choose Class</option>
						<option>L3</option>
						
					</select>
					

						Module Code
						<input type="text" name="module_code" required placeholder="Enter Module Code" class="form-control">
						<br>
						Module Name
						<input type="text" name="module_name" required placeholder="Enter Module Name" class="form-control">
						<br>
						Module Hours
						<input type="text" name="module_hours" required placeholder="Enter Module Hours" class="form-control">
						<br>
						Module Credits
						<input type="text" name="module_credit" required placeholder="Enter Module Credit" class="form-control">
					



				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Add Course</button></center>
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
$module_code=$_POST['module_code'];
$module_name=$_POST['module_name'];
$module_hours=$_POST['module_hours'];
$module_credit=$_POST['module_credit'];



$insert=mysqli_query($conn,"INSERT INTO modules VALUES('','$department_name','$level','$module_code','$module_name','$module_hours','$module_credit')");
if ($insert==1) {
	echo "<script>window.alert('Module Inserted');</script>";
}else{
	echo "<script>window.alert('Module Not Inserted');</script>";
}
}
 ?>

