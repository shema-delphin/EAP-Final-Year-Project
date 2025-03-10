<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<style>
		body{
			background-image: url('1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
  			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><br><br><br><br>
			
			<form action="" method="POST">
				
				<div class="mb-3"></div>
				<br><br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-info">Admin Login Here!!</h3></center>
				</div>
				<div class="card-body">
					<div class="input-group">
					<input type="text" name="username" placeholder="Enter Your Username" class="form-control">
					</div>
					<div class="mb-3"></div>
					<div class="input-group">
						<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-info" name="submit">Login</button></center>
						</div>
						<div class="col-md-6">
							<center><button class="btn btn-block btn-danger">Cancel</button></center>
						</div>
					</div>

				</div>
				<center>
					<a href="loginuser.php" class="text text-primary" style="text-decoration: none;">User Login</a>
				</center>
			</div>

			</form>



<?php 
session_start();
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","sms");

	$username=$_POST['username'];
	$password=$_POST['password'];

	$select=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$num=mysqli_num_rows($select);


	if ($num==true) {
		$_SESSION['UserSession']=$username;
		header('location:admin_dashboard_view.php');
	}else{
		echo "<script>window.alert('Your Username Or Password Is Incorrect!!!! Try Again');</script>";
	}
}
 ?>


		</div>

		
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>





