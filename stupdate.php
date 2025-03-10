<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>



<?php 
$conn=mysqli_connect("localhost","root","","sms");
$st_id=$_GET['st_id'];
$select=mysqli_query($conn,"SELECT * FROM student WHERE st_id='$st_id'");
$num=mysqli_num_rows($select);
while ($data=mysqli_fetch_array($select)) {


$st_id=$data['st_id'];
$student_code=$data['student_code'];
$firstname=$data['firstname'];
$lastname=$data['lastname'];
$gender=$data['gender'];
$dob=$data['dob'];

$email=$data['email'];
$phone=$data['phone'];
$idnumber=$data['idnumber'];
$province=$data['province'];

$district=$data['district'];
$sector=$data['sector'];
$cell=$data['cell'];
$village=$data['village'];

$school=$data['school'];
$department=$data['department'];
$level3=$data['level3'];
$level4=$data['level4'];
$level5=$data['level5'];
$position=$data['position'];
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
	<center><h3 class="text text-primary">Student Update Form</h3></center>	


			
<div class="col-md-4">
			

<form action="stup.php" method="POST">
				<br>
				<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					
					Student Id
					<input type="number" name="st_id" readonly="" class="form-control" value="<?php echo $st_id ?>">
					

					Student Code
					<input type="number" name="student_code" placeholder="Add Student Code" required class="form-control" value="<?php echo $student_code ?>">
					

					
					First Name
					<input type="text" name="firstname" placeholder="Add Student Firstname" required class="form-control" value="<?php echo $firstname ?>">
					

					
					Last Name
					<input type="text" name="lastname" placeholder="Add Student Lastname" required class="form-control" value="<?php echo $lastname ?>">
					

					
					Gender
					<input type="text" name="gender" placeholder="Add Student Gender" required class="form-control" value="<?php echo $gender ?>">
					

					
					Date Of Birth
					<input type="date" name="dob" placeholder="Add Student Date Of Birth" required class="form-control" value="<?php echo $dob ?>">
					

					
					Email
					<input type="email" name="email" placeholder="Add Student Email" required class="form-control" value="<?php echo $email ?>">
					


				</div>
			</div>

			<br>
		</div>


		<div class="col-md-4">
			<br>
				<div class="card">
				<div class="card-body">

					Phone Number
					<input type="number" name="phone" placeholder="Add Student Phonenumber" required class="form-control" value="<?php echo $phone ?>">
					

					
					National Id Number
					<input type="number" name="idnumber" placeholder="Add Student Id Number" class="form-control" value="<?php echo $idnumber ?>">
					

					
					Province
					<input type="text" name="province" placeholder="Add Student Province" required class="form-control" value="<?php echo $province ?>">
					

					
					Disctrict
					<input type="text" name="district" placeholder="Add Student Disctrict" required class="form-control" value="<?php echo $district ?>">
					

					
					Sector
					<input type="text" name="sector" placeholder="Add Student Sector" required class="form-control" value="<?php echo $sector ?>">
					

					
					Cell
					<input type="text" name="cell" placeholder="Add Student Cell" required class="form-control" value="<?php echo $cell ?>">
					

					
					Village
					<input type="text" name="village" placeholder="Add Student Village" required class="form-control" value="<?php echo $village ?>">
					

</div>
</div>


		</div>


		<div class="col-md-4">
			

				<br>
				<div class="card">
				<div class="card-body">


					School Name Where You're Come From
					<input type="text" name="school" placeholder="Add Student School" required class="form-control" value="<?php echo $school ?>">
					

					
					Department
					<input type="text" name="department" placeholder="Add Student Department" required class="form-control" value="<?php echo $department ?>">
					

					
					Add Level 3 Students
					<input type="text" name="level3" placeholder="Add Level 3 Students" required class="form-control" value="<?php echo $level3 ?>">
					

					
					Add Level 4 Students
					<input type="text" name="level4" placeholder="Add Level 4 Students" required class="form-control" value="<?php echo $level4 ?>">
					

					
					Add Level 5 Students
					<input type="text" name="level5" placeholder="Add Level 5 Students" required class="form-control" value="<?php echo $level5 ?>">
					

					
					Choose Position
					<input type="text" name="position" placeholder="Add Student Postion" required class="form-control" value="<?php echo $position ?>">
					


				</div><br>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Update Student</button></center>
						</div>
						<div class="col-md-6">
							<center><button class="btn btn-block btn-danger">Cancel</button></center>
						</div>
					</div>

				</div>
			</div>
			</div>

			</form>

	
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