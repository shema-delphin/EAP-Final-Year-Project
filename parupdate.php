<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>



<?php 
$conn=mysqli_connect("localhost","root","","sms");
$par_id=$_GET['par_id'];
$select=mysqli_query($conn,"SELECT * FROM parents WHERE par_id='$par_id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


$par_id=$data['par_id'];
$st_id=$data['st_id'];

$fathername=$data['fathername'];
$fatherphone=$data['fatherphone'];
$fathernid=$data['fathernid'];
$fatherdob=$data['fatherdob'];

$mathername=$data['mathername'];
$matherphone=$data['matherphone'];
$mathernid=$data['mathernid'];
$matherdob=$data['matherdob'];
$emergency=$data['emergency'];


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
		<?php include('includes/register_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		<center><h3 class="text text-primary">Update Parents Form</h3></center>
		<div class="col-md-12">
			

<div class="col-md-2"></div>
		<div class="col-md-8">
			

			<form action="parup.php" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					Parent Id
					<input type="text" name="par_id" readonly=""  required class="form-control" value="<?php echo $par_id ?>">
					

					Student Id
					<input type="text" name="st_id" readonly="" required class="form-control" value="<?php echo $st_id ?>">
					


				<div class="row">
					<div class="col-md-6">
						
					
					Father's Names
					<input type="text" name="fathername" placeholder="Add Parent Father's Names" required class="form-control" value="<?php echo $fathername ?>">
					

				
					Father's Phonenumber
					<input type="text" name="fatherphone" placeholder="Add Parent Phonenumber" required class="form-control" value="<?php echo $fatherphone ?>">

					
					National Id Number
					<input type="number" name="fathernid" placeholder="Add Parent National Id" required class="form-control" value="<?php echo $fathernid ?>">
					

					
					Date Of Birth
					
					<input type="date" name="fatherdob" placeholder="Add Date Of Birth" required class="form-control" value="<?php echo $fatherdob ?>">
					

					</div>





					<div class="col-md-6">
					
						
					Mather's Names
					<input type="text" name="mathername" placeholder="Add Parent Mather's Names" required class="form-control" value="<?php echo $mathername ?>">
					

					
					Mather's Phonenumber
					<input type="number" name="matherphone" placeholder="Add Parent Phonenumber" class="form-control" value="<?php echo $matherphone ?>">
			

					
					National Id Number
					<input type="number" name="mathernid" placeholder="Add Parent National Id" required class="form-control" value="<?php echo $mathernid ?>">
					

					
					Date Of Birth
					<input type="date" name="matherdob" placeholder="Add Date Of Birth" required class="form-control" value="<?php echo $matherdob ?>">
					

					</div>
				</div>

Emergency Phonenumber
					<input type="number" name="emergency" placeholder="Enter Emergency Phonenumber" required class="form-control" value="<?php echo $emergency ?>">

</div><br>
<div class="card-footer">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<center><button class="btn btn-block btn-primary" name="submit">Update Parent</button></center>
						</div>
						<div class="col-md-3">
							<center><button class="btn btn-block btn-danger">Cancel</button></center>
						</div>
						<div class="col-md-3"></div>
					</div>

				</div>


		<div class="col-md-2"></div>



		</div>
		
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