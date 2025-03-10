
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
<table class="table table-striped table-sm text-center">
	<thead class="table table-info">
		<tr>
		<th>Id</th>
		
		<th>Username</th>
	
		<!-- <th>Status</th> -->
		<th>Option</th>
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
			<td><?php echo $data['username'] ?></td>
			<td>
				<?php 

				if ($data['status']=="blocked") {
					echo "";
				?>
				<a class="btn btn-success" href="unblock.php?id=<?php echo $data['id'] ?>">UnBlock</a></td>
				<?php
				}else{
					echo "";
					?>
					<a class="btn btn-danger" href="block.php?id=<?php echo $data['id'] ?>">Block</a>
				<?php
				}

				 ?>

				

				
			
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
