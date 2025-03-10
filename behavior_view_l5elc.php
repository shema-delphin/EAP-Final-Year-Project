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
		<?php include('includes/annumateur_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		<center><h3 class="text text-primary">Behavior View Marks Level5 ELC</h3></center>	
		<div class="col-md-12">
			
<form action="search_behavior_view_l5elc.php" method="GET">
       
        <input type="text" name="student_code" class="se" required placeholder="Use Student Code">
        <button type="submit" class="but">Search</button>
    </form><br>

	<table class="table table-striped table-sm">
	<thead class="table table-info">
		<tr>
		<th>Student Code</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>First Marks</th>
		<th>Second Marks</th>
		<th>Third Marks</th>
		<!-- <th>Status</th> -->
		<th colspan="2"><center>Option</center></th>
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$select=mysqli_query($conn,"SELECT behavior_id,student_code,firstname,lastname,behavior_first_marks,behavior_second_marks,behavior_third_marks from student right join behavior on student.st_id=behavior.st_id WHERE department_name='ELC' AND level='L5'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {
		?>
		<tr>
			
			<td><?php echo $data['student_code'] ?></td>
			<td><?php echo $data['firstname'] ?></td>
			<td><?php echo $data['lastname'] ?></td>
			<td><?php echo $data['behavior_first_marks'] ?></td>
			<td><?php echo $data['behavior_second_marks'] ?></td>
			<td><?php echo $data['behavior_third_marks'] ?></td>
			
			
			<td><a onclick="return confirm('Are you Sure you want to Delete?'); " class="btn btn-danger" href="behavior_delete_l5elc.php?behavior_id=<?php echo $data['behavior_id'] ?>">Delete</a></td>
			<td><a class="btn btn-success" href="behavior_update_l5elc.php? behavior_id=<?php echo $data['behavior_id'] ?>">Update</a></td>
			
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