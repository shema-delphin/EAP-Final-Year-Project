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
		<?php include('includes/admin_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">


		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="" method="POST">
				<br><br><br>
				<div class="card">
				<div class="card-header">
					<center><h2 class="text text-white">Add Users</h2></center>
				</div>
				<div class="card-body">
					<input type="text" name="firstname" required placeholder="Enter User Firstname" class="form-control">
					
					<br>
					<input type="text" name="lastname" required placeholder="Enter User Lastname" class="form-control">
					
					<br>
					<input type="text" name="gender" required placeholder="Enter User Gender" class="form-control">
					
					<br>
					<input type="text" name="phone" required placeholder="Enter User PhoneNumber" class="form-control">
					
					<br>
					<input type="text" name="nid" required placeholder="Enter User National Id" class="form-control">
					
					<br>
					
					<input type="text" name="username" required placeholder="Enter Your Username" class="form-control">
					
					<br>
					
					<input type="password" name="password" required placeholder="Enter Your Password" class="form-control">
					
				</div>
				<br><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Add User</button></center>
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

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$nid=$_POST['nid'];
$username=$_POST['username'];
$password=$_POST['password'];

$insert=mysqli_query($conn,"INSERT INTO user VALUES('','$firstname','$lastname','$gender','$phone','$nid','$username','$password','allowed')");
if ($insert==1) {
	echo "<script>window.alert('User Well Inserted');</script>";
}else{
	echo "<script>window.alert('User Not Inserted');</script>";
}
}
 ?>
