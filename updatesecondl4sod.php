
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>



<?php 
$conn=mysqli_connect("localhost","root","","sms");
$second_id=$_GET['second_id'];
$select=mysqli_query($conn,"SELECT * FROM second_term WHERE second_id='$second_id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


	$second_id=$data['second_id'];
	$st_id=$data['st_id'];
	$ammount=$data['ammount'];
	$paid=$data['paid'];
	$total=$data['total'];
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
		<?php include('includes/accountant_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="upsecondl4sod.php" method="POST">
				
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Update second Term Level 4 SOD</h3></center>
				</div>
				<div class="card-body">
second Term Id				
<input type="number" name="second_id" readonly class="form-control" value="<?php echo $second_id ?>">				
<br>
Student Id
<input type="number" name="st_id" readonly class="form-control" value="<?php echo $st_id ?>">
<br>
School Fees
<input type="number" name="ammount" readonly="" class="form-control" value="<?php echo $ammount ?>">
<br>					
Fees Paid				
<input type="number" name="paid" class="form-control" value="<?php echo $paid ?>">
<br>
Total Remaining Fees
<input type="number" name="total" readonly="" class="form-control" value="<?php echo $total ?>">

					</div>
				</div><br>
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
