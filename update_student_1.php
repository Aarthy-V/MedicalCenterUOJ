<?php
error_reporting(0);
session_start();

$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);


$id=$_GET['StudentID'];

if(isset($_POST['UPDATE']))
	{


		$data_id=$_POST['StudentID'];
		$data_nic=$_POST['NIC'];
		$data_bid=$_POST['BatchID'];
		$data_fid=$_POST['FacultyID'];
		$data_fname=$_POST['Stu_firstName'];
		$data_lname=$_POST['Stu_lastName'];
		$data_gender=$_POST['Gender'];
		$data_dob=$_POST['DOB'];
		$data_pno=$_POST['PhoneNum'];
		$data_addr=$_POST['PermanentAddress'];


		$sql="UPDATE student SET StudentID='$data_id',NIC='$data_nic',BatchID='$data_bid',FacultyID='$data_fid',Stu_firstName='$data_fname',Stu_lastName='$data_lname',Gender='$data_gender',DOB='$data_dob',PhoneNum='$data_pno',PermanentAddress='$data_addr' WHERE StudentID='$id' ";

		$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Update successfully";
		header("location:update_student.php");
	}
	else
	{
		echo "Update failed";
	}

	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<style type="text/css">
		label{
			display: inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.div_deg{
			background-color: skyblue;
			width: 400px;
			padding-top: 70px;
			padding-bottom: 70px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="doctor.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<header class="header">
		<a href="admin.php">Admin Dashboard</a>
		<div class="logout">
			<a href="login.php" class="btn btn-primary">LOGOUT</a>
		</div>
	</header>
	<aside>
		<ul>
			<li>
				<a href="add_student.php">Add Students</a>
			</li>
			<li>
				<a href="view_student.php">View all Student</a>
			</li>
			<li>
				<a href="view_student_stID.php">View particular Student</a>
			</li>
			<li>
				<a href="update_student.php">Update Student</a>
			</li>
			<li>
				<a href="delete_student.php">Delete Student</a>
			</li>
			<li>
				<a href="add_doctor.php">Add Doctor</a>
			</li>
			<li>
				<a href="view_doctor.php">View all Doctor</a>
			</li>
			
			

		</ul>
	</aside>

	<div class="content">
		<center>
		<h1>Update Student details</h1>
		<div class="div_deg">
		<form action="#" method="POST"> 

			<div>
				<label>StudentID</label>
				<input type="text" name="StudentID" value="<?php echo "{$info['StudentID']}"?>">
			</div>
			<div >
				<label>NIC</label>
				<input type="type" name="NIC" value="<?php echo "{$info['NIC']}"?>">
			</div>
			<div>
				<label>BatchID</label>
				<input type="text" name="BatchID" value="<?php echo "{$info['BatchID']}"?>">
			</div>
			<div>
				<label>FacultyID</label>
				<input type="text" name="FacultyID" value="<?php echo "{$info['FacultyID']}"?>">
			</div>
			<div>
				<label>Stu_firstName</label>
				<input type="text" name="Stu_firstName" value="<?php echo "{$info['Stu_firstName']}"?>">
			</div>
			<div>
				<label>Stu_lastName</label>
				<input type="text" name="Stu_lastName" value="<?php echo "{$info['Stu_lastName']}"?>">
			</div>
			<div>
				<label>Gender</label>
				<input type="text" name="Gender" value="<?php echo "{$info['Gender']}"?>">
			</div>
			<div>
				<label>DOB</label>
				<input type="text" name="DOB" value="<?php echo "{$info['DOB']}"?>">
			</div>
			<div>
				<label>PhoneNum</label>
				<input type="text" name="PhoneNum" value="<?php echo "{$info['PhoneNum']}"?>">
			</div>
			<div>
				<label>Permanet Address</label>
				<input type="text" name="Permanet Address" value="<?php echo "{$info['Permanet Address']}"?>">
			</div>
			<div>
				
				<input class="btn btn-primary" id="submit" type="submit" value="UPDATE" name="UPDATE">
			</div>

		</form>
	</div>
	</center>
	</div>


</body>
</html>