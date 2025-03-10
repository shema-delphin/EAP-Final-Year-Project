
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
	.se{
        height: 25px;
        width: 220px;
        border:none;
        box-shadow: 0px 1px 10px 2px;
        }
    .but{
     	height: 28px;
     	width: 100px;
     	border:none;
     	color: white;
     	background-color: #3e454c;
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
		<center><h3 class="text text-primary">Marks View Third Term Level5 ELC</h3></center>	
		<div class="col-md-12">
			
<form action="search_admin_marksthirdl5elc.php" method="GET">
       
        <input type="text" name="student_code" class="se" required>
        <button type="submit" class="but">Search</button>
    </form><br>

	<table class="table table-striped table-sm">
	<thead class="table table-info">
		<tr>
		<th>Id</th>
		<th>Student Code</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Module Code</th>
		<th>Module Name</th>
		<th>Module Hours</th>
		<th>Module Credit</th>
		<th>Formative /50</th>
		<th>Summative /50</th>
		<th>Total /100</th>
		<!-- <th>Status</th> -->
		
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$student_code=$_GET['student_code'];
	$select=mysqli_query($conn,"SELECT * FROM sub33 WHERE department_name='ELC' AND level='L5' AND student_code LIKE '%$student_code%'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><?php echo $data['marks_id'] ?></td>
			<td><?php echo $data['student_code'] ?></td>
			<td><?php echo $data['firstname'] ?></td>
			<td><?php echo $data['lastname'] ?></td>
			<td><?php echo $data['module_code'] ?></td>
			<td><?php echo $data['module_name'] ?></td>
			<td><?php echo $data['module_hours'] ?></td>
			<td><?php echo $data['module_credit'] ?></td>
			<td><?php echo $data['formative'] ?></td>
			<td><?php echo $data['summative'] ?></td>
			<td><?php echo $data['total_marks'] ?></td>
		
			
		</tr>
		<?php
	}
	}else{
		echo "No Data";
		}
	 ?>
	
</table>



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




<!-- SELECT first_id,student_code,firstname,lastname,ammount,paid,total FROM student RIGHT JOIN first_term ON student.st_id = first_term.st_id -->