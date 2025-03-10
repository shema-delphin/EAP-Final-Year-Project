
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
		<?php include('includes/level4elc_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">
			

<form action="" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Add Marks First Term Level4 ELC</h3></center>
				</div><br>
				<div class="card-body">
					Department
					<select name="department_name" class="form-control">
					<option>Select Department</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT department_name FROM department WHERE department_name='ELC'";
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
					Student
					<select name="st_id" class="form-control">
					<option>Select Student</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT st_id,student_code,firstname,lastname FROM student WHERE department='ELC' AND level4='l4'";
                        $query=mysqli_query($conn,$select);
                        while ($data=mysqli_fetch_array($query)) {
                        ?>
                        	<option value="<?php echo $data['st_id'] ?>">
                        		           <?php echo $data['st_id'] ?>&nbsp;||&nbsp;<?php echo $data['student_code'] ?>&nbsp;||&nbsp;<?php echo $data['firstname'] ?>&nbsp;&nbsp;<?php echo $data['lastname'] ?>
                        		
                        	</option>
                        <?php
                        }
						?>
					</select>
					<br>
					Module
					<select name="module_id" class="form-control">
					<option>Select Module</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT module_id,module_code,module_name FROM modules WHERE department_name='ELC' AND level='l4'";
                        $query=mysqli_query($conn,$select);
                        while ($data=mysqli_fetch_array($query)) {
                        ?>
                        	<option value="<?php echo $data['module_id'] ?>">
                        		           <?php echo $data['module_id'] ?>&nbsp;||&nbsp;
                        					<?php echo $data['module_code'] ?>&nbsp;||&nbsp;<?php echo $data['module_name'] ?>
                        		
                        	</option>
                        <?php
                        }
						?>
					</select>
					
					<br>
					

						Formative Marks /50
						<input type="text" name="formative" required placeholder="Enter Formative Marks" class="form-control">
						<br>
						Summative Marks /50
						<input type="text" name="summative" required placeholder="Enter Summative Marks" class="form-control">
						<input type="hidden" name="total_marks" required placeholder="Enter Summative Marks" class="form-control">
					



				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Add Marks</button></center>
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
$module_id=$_POST['module_id'];
$formative=$_POST['formative'];
$summative=$_POST['summative'];
$total_marks=$formative+$summative;



if ($formative<=50 && $formative>=0) {
	
if ($summative<=50 && $summative>=0) {


$insert1=mysqli_query($conn,"INSERT INTO marks_first_term VALUES('','$department_name','$level','$st_id','$module_id','$formative','$summative','$total_marks')");

$insert2=mysqli_query($conn,"INSERT INTO marks_second_term VALUES('','$department_name','$level','$st_id','$module_id','$formative','$summative','$total_marks')");

$insert3=mysqli_query($conn,"INSERT INTO marks_third_term VALUES('','$department_name','$level','$st_id','$module_id','$formative','$summative','$total_marks')");


if ($insert1==1 && $insert2==1 && $insert3==1) {
	echo "<script>window.alert('Marks Inserted');</script>";
}else{
	echo "<script>window.alert('Marks Not Inserted');</script>";
}


	
}else{
	echo "<script>window.alert('Check The Marks You Intered in Summative');</script>";
}


}else{
	echo "<script>window.alert('Check The Marks You Intered in Formative');</script>";
}


}
 ?>

 