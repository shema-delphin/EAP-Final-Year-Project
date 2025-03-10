
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
		<?php include('includes/level4sod_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		<center><h3 class="text text-primary">Marks View Second Term Level4 SOD</h3></center>	
		<div class="col-md-12">
			
<form action="search_viewreport4sod_third_term.php" method="GET">
       
        <input type="text" name="student_code" class="se" required placeholder="Use Student Code">
        <button type="submit" class="but">Search</button>
    </form><br>

	<table class="table table-striped table-sm">
	<thead class="table table-info">
		<tr>
		<th>Student Id</th>
		<th>Student Code</th>
		<th>Firstname</th>
		<th>Lastname</th>
		
		<!-- <th>Status</th> -->
		<th>Option</th>
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$student_code=$_GET['student_code'];
	$select=mysqli_query($conn,"SELECT st_id,student_code,firstname,lastname FROM report_third WHERE total=0 AND department_name='SOD' AND level='L4' GROUP BY st_id AND student_code LIKE '%$student_code%'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><?php echo $data['st_id'] ?></td>
			<td><?php echo $data['student_code'] ?></td>
			<td><?php echo $data['firstname'] ?></td>
			<td><?php echo $data['lastname'] ?></td>
			<td><a class="btn btn-primary" href="report_third.php? st_id=<?php echo $data['st_id'] ?>">Report</a></td>
			
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