<?php

$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
	die("connection error");
}
if(isset($_POST['ADD'])) 
{
	$data_id=$_POST['docPhysicianID'];
	$data_fname=$_POST['FirstName'];
	$data_lname=$_POST['LastName'];
	$data_gender=$_POST['Gender'];
	$data_pno=$_POST['PhoneNum'];
	$data_spl=$_POST['Specialization'];


	$sql="INSERT INTO doctor(docPhysicianID,FirstName,LastName,Gender,PhoneNum,Specialization) VALUES('$data_id','$data_fname','$data_lname','$data_gender','$data_pno','$data_spl')";

	$result=mysqli_query($data,$sql);


	if($result)
	{
		echo "Add successfully";
	}
	else
	{
		echo "Add failed";
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
				<a href="view_student.php">View Student</a>
			</li>
			<li>
				<a href="view_student_stID.php">View particular Student</a>
			</li>
			<li>
				<a href="sort.php">Sort by particular batch</a>
			</li>
			<li>
				<a href="sort1.php">Sort by particular faculty</a>
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
		<h1>Add Doctor</h1>
		<div class="div_deg">
			<form action="#" method="POST">
			<div>
				<label>Doctor physician ID</label>
				<input class="input_deg" placeholder="ID" type="text" name="docPhysicianID">
			</div>
			<div>
				<label>First Name</label>
				<input type="text" placeholder="First Name" name="FirstName">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" placeholder="Last Name" name="LastName">
			</div>
			<div>
				<label>Gender</label>
				<select name="Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div>
				<label>Phone Number</label>
				<input type="text" placeholder="Phone Num" name="PhoneNum">
			</div>
			<div>
				<label>Specialization</label>
				<input type="text" placeholder="Specialization" name="Specialization">
			</div>
			<div>
				
				<input class="btn btn-primary" id="submit" type="submit" value="ADD" name="ADD">
			</div>
			</form>
		</div>
	</center>
	</div>

</body>
</html>
