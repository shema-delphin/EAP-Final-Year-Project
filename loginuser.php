<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<style>
		body{
			background-image: url('1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
  			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><br><br><br>
			
			<form action="" method="POST">
				<div class="mb-3"></div>
				<br><br><br>
				<div class="card">
				<div class="card-header">
					<center><h3 class="text text-info">User Login Here!!</h3></center>
				</div>
				<div class="card-body">

					<div class="input-group">
					<select name="username" class="form-control">
						<option>Select User Name</option>
						<?php 
                        $conn=mysqli_connect("localhost","root","","sms");
                        $select="SELECT username FROM user";
                        $query=mysqli_query($conn,$select);
                        while ($data=mysqli_fetch_array($query)) {
                        ?>
                        	<option value="<?php echo $data['username'] ?>">
                        		           <?php echo $data['username'] ?>
                        		
                        	</option>
                        <?php
                        }
						?>
					</select>
					</div>

					<div class="mb-3"></div>
					<div class="input-group">
						<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<center><button class="btn btn-block btn-info" name="submit">Login</button></center>
						</div>
						<div class="col-md-6">
							<center><button class="btn btn-block btn-danger">Cancel</button></center>
						</div>
					</div>

				</div>
				<center>
					<a href="login.php" class="text text-primary" style="text-decoration: none;">Back Login</a>
				</center>
			</div>

			</form>



<?php 
session_start();
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","sms");

	$username=$_POST['username'];
	$password=$_POST['password'];

	

	$select1=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password' and status='blocked'");
	$num1=mysqli_num_rows($select1);


	if ($num1>0) {
		echo "<script>window.alert('User Blocked')</script>";
	}
else{
	$select=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password' and status='allowed'");
	$num=mysqli_num_rows($select);

	if ($num == true) {
    $_SESSION['UserSession'] = $username;

    switch ($username) {
        case 'Register':
            header('Location: register_dashboard_view.php');
            break;
        case 'Accoutant':
            header('Location: accountant_dashboard_view.php');
            break;
        case 'Teacher_L3_SOD':
            header('Location: level_l3_sod_view.php');
            break;
        case 'Teacher_L4_SOD':
            header('Location: level_l4_sod_view.php');
            break;
        case 'Teacher_L5_SOD':
            header('Location: level_l5_sod_view.php');
            break;
        case 'Teacher_L3_ELC':
            header('Location: level_l3_elc_view.php');
            break;
        case 'Teacher_L4_ELC':
            header('Location: level_l4_elc_view.php');
            break;
        case 'Teacher_L5_ELC':
            header('Location: level_l5_elc_view.php');
            break;
        case 'Patron':
            header('Location: annumateur_dashboard_view.php');
            break;
        default:
            echo "<script>window.alert('Your Username Or Password Is Incorrect!!!! Try Again');</script>";
            break;
    }
} else {
    echo "<script>window.alert('Your Username Or Password Is Incorrect!!!! Try Again');</script>";
}
}
}
 ?>



		</div>

		
		<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
