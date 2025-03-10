
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
		<?php include('includes/accountant_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Second Term Payment L4 SOD</h3></center>
				</div><br>
				<div class="card-body">
					Student Id
					<select name="st_id" class="form-control">
					<option>Select Student Id</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT st_id,student_code,firstname,lastname,position FROM student WHERE department='SOD' AND level4='L4'";
                        $query=mysqli_query($conn,$select);
                        while ($data=mysqli_fetch_array($query)) {
                        ?>
                        	<option value="<?php echo $data['st_id'] ?>">
                        		           <?php echo $data['st_id'] ?>&nbsp;||&nbsp;<?php echo $data['student_code'] ?>&nbsp;||&nbsp;<?php echo $data['firstname'] ?>&nbsp;&nbsp;<?php echo $data['lastname'] ?>
                        		           &nbsp;||&nbsp;<?php echo $data['position'] ?>
                        		
                        	</option>
                        <?php
                        }
						?>
					</select>
					<br>

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
						<option>L4</option>
						
					</select>
					<br>
					Intern Student Have To Pay 100,000 Frw <br>
					Extern Student Have To Pay 70,000 Frw
					
					<select name="ammount" class="form-control">
						<option>Choose Ammount Of Money Student Have To Pay</option>
						<option>70000 </option>
						<option>100000 </option>
						
					</select>
					

						Enter Ammount
						<input type="number" name="paid" required placeholder="Enter Ammount" class="form-control">
						<input type="hidden" name="total" required placeholder="Enter Ammount" class="form-control">
					



				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Add Payment</button></center>
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

$st_id=$_POST['st_id'];
$department_name=$_POST['department_name'];
$level=$_POST['level'];
$ammount=$_POST['ammount'];
$paid=$_POST['paid'];
$total=$ammount-$paid;


if ($paid <= $ammount && $paid>0) {


	$insert=mysqli_query($conn,"INSERT INTO second_term VALUES('','$st_id','$department_name','$level','$ammount','$paid','$total')");
if ($insert==1) {
	echo "<script>window.alert('Payment Well Inserted');</script>";
}else{
	echo "<script>window.alert('Payment Not Inserted');</script>";
}



}

else{
	echo "<script>window.alert('Payment Not Inserted');</script>";
}


}
 ?>

