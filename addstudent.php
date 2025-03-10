
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
		<?php include('includes/register_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
	<div class="row">

<center><h3 class="text text-primary">Student Registration Form</h3></center>

<div class="col-md-4">
			

<form action="" method="POST">

				<br>
				<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">

					Student Code
					<input type="number" name="student_code" placeholder="Add Student Code" required class="form-control">
					

				
					First Name
					<input type="text" name="firstname" placeholder="Add Student Firstname" required class="form-control">


					Last Name
					<input type="text" name="lastname" placeholder="Add Student Lastname" required class="form-control">
					

					Gender
					<select name="gender" class="form-control">
						<option>Choose Your Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>

					Date Of Birth
					<input type="date" name="dob" placeholder="Add Student Date Of Birth" required class="form-control">
					
					Email
					<input type="email" name="email" placeholder="Add Student Email" required class="form-control">
					

					Phone Number
					<input type="number" name="phone" placeholder="Add Student Phonenumber" required class="form-control">
				</div>
			</div>

			<br>
		</div>


		<div class="col-md-4">
			<br>
				<div class="card">
				<div class="card-body">

					National Id Number
					<input type="number" name="idnumber" placeholder="Add Student Id Number" class="form-control">
					

					
					Province
					<select name="province" class="form-control">
						<option>Choose Province</option>
						<option>Eastern</option>
						<option>Western</option>
						<option>Kigali</option>
						<option>North</option>
						<option>South</option>
					</select>
					

					
					Disctrict
					<input type="text" name="district" placeholder="Add Student Disctrict" required class="form-control">
					

					
					Sector
					<input type="text" name="sector" placeholder="Add Student Sector" required class="form-control">
					

					
					Cell
					<input type="text" name="cell" placeholder="Add Student Cell" required class="form-control">
					

					
					Village
					<input type="text" name="village" placeholder="Add Student Village" required class="form-control">

					School Name Where You're Come From
					<input type="text" name="school" placeholder="Add Student School" required class="form-control">
					

</div>
</div>


		</div>


		<div class="col-md-4">
			

				<br>
				<div class="card">
				<div class="card-body">




					Department
					<select name="department" class="form-control">
						<option>Choose Department</option>
						<option>SOD</option>
						<option>ELC</option>
						
					</select>

					Add Level 3 Students
					<input type="text" name="level3" placeholder="Add Level 3 Students" required class="form-control">
					</div>

					Add Level 4 Students
					<input type="text" name="level4" placeholder="Add Level 4 Students" required class="form-control">

					Add Level 5 Students
					<input type="text" name="level5" placeholder="Add Level 5 Students" required class="form-control">

					Choose Position
					<select name="position" class="form-control">
						<option>Choose Position</option>
						<option>Intern</option>
						<option>Extern</option>
						
					</select>


				</div>
				<div class="card-footer">
					<div class="row"><br><br><br><br>
						<div class="col-md-6">
							<center><button class="btn btn-block btn-primary" name="submit">Add Student</button></center>
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













<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","sms");

$student_code=$_POST['student_code'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$idnumber=$_POST['idnumber'];
$province=$_POST['province'];

$district=$_POST['district'];
$sector=$_POST['sector'];
$cell=$_POST['cell'];
$village=$_POST['village'];

$school=$_POST['school'];
$department=$_POST['department'];
$level3=$_POST['level3'];
$level4=$_POST['level4'];
$level5=$_POST['level5'];
$position=$_POST['position'];


$insert=mysqli_query($conn,"INSERT INTO student VALUES('','$student_code','$firstname','$lastname','$gender','$dob','$email','$phone','$idnumber','$province','$district','$sector','$cell','$village','$school','$department','$level3','$level4','$level5','$position')");

if ($insert==1) {
		echo "<script>window.alert('Student Inserted');</script>";
	}
	else{
		echo "<script>window.alert('Student Not Inserted');</script>";
	}
	

}

 ?>