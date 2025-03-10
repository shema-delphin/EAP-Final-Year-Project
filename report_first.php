
<?php 
session_start();
$username=$_SESSION['UserSession'];
if (isset($username)) {
?>


<!doctype html>
<html lang="en" class="no-js">
<head>

<style>
	td{
		padding-left: 50px;
		padding-right: 50px;
	}
	p{
		text-align: center;
		font-size: 20px;
		padding-left: 280px;
		padding-right: 280px;
	}

</style>

</head>
<body>
<center>
	

<table border="">
	<tr>
		<td colspan="8"><b><p>TRAINEE'S ASSESSMENT REPORT</p></b></td>
	</tr>
	<tr>
		
		<td rowspan="4"><img src="image/2.png" style="width:150px;height:100px;"></td>
		<td colspan="2">Scool Name</td>
		<td colspan="5">ECOLE SECONDAIRE TECHNIQUE GISENYI (ESTG)</td>
		
	</tr>
	<tr>
		
		<td colspan="2">PO Box</td>
		<td colspan="5">101 GISENYI</td>
		
	</tr>
	<tr>
		
		<td colspan="2">E-mail</td>
		<td colspan="5"> ndahiriwefidele@hotmail.com</td>
	</tr>
	<tr>
		
		<td colspan="2">Telephone</td>
		<td colspan="5">0788852859</td>
		
	</tr>
	
</table>



<center><p><b>First Term</b></p></center>

<table>
	<thead >
		<tr>
		<th></th>
		<th></th>
		<th></th>
		<th>Behavior Marks</th>
		<th></th>
		<th></th>
		
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$st_id=$_GET['st_id'];
	$select=mysqli_query($conn,"SELECT * FROM report_first WHERE st_id='$st_id' GROUP BY st_id");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {
		?>
		<tr bgcolor="yellow">

			<td><b><?php echo $data['student_code'] ?></b></td>
			<td><b><?php echo $data['firstname'] ?></b></td>
			<td><b><?php echo $data['lastname'] ?></b></td>
			<td><b><?php echo $data['behavior_first_marks'] ?></b></td>
			<td><b><?php echo $data['department_name'] ?></b></td>
			<td><b><?php echo $data['level'] ?></b></td>
			
			
		</tr>
		<?php
	}
	}else{
		echo "No Data";
		}
	 ?>
	
</table>




<br>



<table border="">
		<thead >
		<tr>
		<th>Module Code </th>
		<th>Module Name </th>
		<th>Module Hours </th>
		<th>Module Credit </th>
		<th>Formative </th>
		<th>Summative </th>
		<th>Total Marks </th>
		
	</tr>
	</thead>
	<?php 
	$conn=mysqli_connect("localhost","root","","sms");
	$st_id=$_GET['st_id'];
	$select=mysqli_query($conn,"SELECT * FROM report_first WHERE st_id='$st_id'");
	$num=mysqli_num_rows($select);

	$add=0;
	$count=0;
	$per=0;

	if ($num>0) {
		while ($data=mysqli_fetch_array($select)) {

			$add=$add+$data['total_marks'];
			$count=$count+1;
			$per=$add/$count;
		?>
		<tr>

			<td><?php echo $data['module_code'] ?></td>
			<td><?php echo $data['module_name'] ?></td>
			<td><?php echo $data['module_hours'] ?></td>
			<td><?php echo $data['module_credit'] ?></td>
			<td><?php echo $data['formative'] ?></td>
			<td><?php echo $data['summative'] ?></td>
			<td><b><?php echo $data['total_marks'] ?></b></td>
			
			
		</tr>
		<?php
	}
	}else{
		echo "No Data";
		}
	 ?>

	 <tr>
	 	<td colspan="6"><b>Total</b></td>
	 	<td><b><?php echo $add; ?></b></td>
	 </tr>
	 <tr>
	 	<td colspan="6"><b>Percentage</b></td>
	 	<td><b><?php echo $per; ?>%</b></td>
	 </tr>
	
</table>
<br>
<table border="" >
	<tr >
		<td colspan="4" style="padding-left: 240px; padding-right: 242px;"><br>Parent Signature:<br>Class Trainer Signature: <br> <br>Promoted <br>Promoted Elsewhere <br> Advise to repeat <br> Discontineud <br><br>
		</td>
		<td colspan="3"><center>Done at Gisenyi <?php echo date('Y-M-d'); ?><br><br><b>NDAHIRIWE Muke Fidele </b><br>Head Teacher of ESTG-TVET School <br>Stamp & Signature</center></td>

	</tr>
</table>

</center>

</body>
</html>


<?php
}else{
	header('location:login.php');
}
?>
