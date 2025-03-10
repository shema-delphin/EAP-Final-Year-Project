
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>



<?php 
$conn=mysqli_connect("localhost","root","","sms");
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


	$id=$data['id'];
	$firstname=$data['firstname'];
	$lastname=$data['lastname'];
	$gender=$data['gender'];
	$phone=$data['phone'];
	$nid=$data['nid'];
	$username=$data['username'];
	$password=$data['password'];
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
		<?php include('includes/admin_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="upuser.php" method="POST">
				
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Update User Here!!</h3></center>
				</div>
				<div class="card-body">
					
<input type="number" name="id" readonly class="form-control" value="<?php echo $id ?>">
					
<br>
<input type="text" name="firstname" placeholder="Enter Your Username" class="form-control" value="<?php echo $firstname ?>">
<br>
<input type="text" name="lastname" placeholder="Enter Your Username" class="form-control" value="<?php echo $lastname ?>">
<br>
<input type="text" name="gender" placeholder="Enter Your Username" class="form-control" value="<?php echo $gender ?>">
<br>
<input type="text" name="phone" placeholder="Enter Your Username" class="form-control" value="<?php echo $phone ?>">
<br>
<input type="text" name="nid" placeholder="Enter Your Username" class="form-control" value="<?php echo $nid ?>">
<br>					
<input type="text" name="username" placeholder="Enter Your Username" class="form-control" value="<?php echo $username ?>">
<br>					
					
<input type="text" name="password" placeholder="Enter Your Username" class="form-control" value="<?php echo $password ?>">
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Update</button></center>
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
