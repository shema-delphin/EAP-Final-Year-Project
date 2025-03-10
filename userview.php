
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
		<?php include('includes/admin_dashboard.php');?>
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
		
		<div class="col-md-12">
			
<br>
	<table class="table table-striped table-sm">
	<thead class="table table-info">
		<tr>
		<th>Id</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Gender</th>
		<th>Phone Number</th>
		<th>National Id</th>
		<th>Username</th>
		<th>Password</th>
		<!-- <th>Status</th> -->
		<th colspan="2"><center>Option</center></th>
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$select=mysqli_query($conn,"SELECT * FROM user");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['firstname'] ?></td>
			<td><?php echo $data['lastname'] ?></td>
			<td><?php echo $data['gender'] ?></td>
			<td><?php echo $data['phone'] ?></td>
			<td><?php echo $data['nid'] ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo md5($data['password']) ?></td>
			
			<td><a onclick="return confirm('Are you Sure you want to Delete?'); " class="btn btn-danger" href="deleteuser.php?id=<?php echo $data['id'] ?>">Delete</a></td>
			<td><a class="btn btn-success" href="updateuser.php?id=<?php echo $data['id'] ?>">Update</a></td>
			
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

</body>
</html>


<?php
}else{
	header('location:login.php');
}
?>