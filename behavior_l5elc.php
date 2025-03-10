
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
			

<form action="" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-primary">Behavior Marks Level5 ELC</h3></center>
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
						<option>L5</option>
						
						
					</select>
					<br>
					Student
					<select name="st_id" class="form-control">
					<option>Select Student</option>						
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT st_id,student_code,firstname,lastname FROM student WHERE department='ELC' AND level5='l5'";
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
					

						Behavior First Term Marks /40
						<input type="text" name="behavior_first_marks" required placeholder="Enter Behavior Marks" class="form-control">
						<br>
						Behavior Second Term Marks /40
						<input type="text" name="behavior_second_marks" required placeholder="Enter Behavior Marks" class="form-control">
						<br>
						Behavior Third Term Marks /40
						<input type="text" name="behavior_third_marks" required placeholder="Enter Behavior Marks" class="form-control">
						
						
					



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


 