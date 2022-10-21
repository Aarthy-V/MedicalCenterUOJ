<?php



$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['ADD']))
{
	$SID=$_POST['id'];
	$DID=$_POST['dID'];
	$date=$_POST['date1'];
	$time=$_POST['time1'];

	$sql="INSERT INTO appointment (docPhysicianID,StudentID,AppointmentDate,AppointmentTime) VALUES ('$DID','$SID','$date','$time')";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Booked successfully";
	}
	else
	{
		echo "Booked failed";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor Dashboard</title>
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
		<a href="student.php">Student Dashboard</a>
		<div class="logout">
			<a href="login.php" class="btn btn-primary">LOGOUT</a>
		</div>
	</header>
	<aside>
		<ul>
			
			<li>
				<a href="view_doctors_stu.php">View Doctors</a>
			</li>
			<li>
				<a href="view_available_time.php">View available time</a>
			</li>
			<li>
				<a href="add_an_appointment.php">Add an appointments</a>
			</li>
			
		</ul>
	</aside>

	<div class="content">
		<center>
		<h1>Add an appointment</h1>
		<div class="div_deg">
			<form action="#" method="POST">
				<div>
					<label>StudentID</label>
					<input type="text" name="id">
				</div>
				<div>
					<label>docPhysicianID</label>
					<input type="text" name="dID">
				</div>
				<div>
					<label>Date</label>
					<input type="text" name="date1">
				</div>
				<div>
					<label>Time</label>
					<input type="text" name="time1">
				</div>
				<div>
					
					<input type="submit" class="btn btn-primary" name="ADD" value="ADD">
				</div>
			</form>
		</div>
	</center>
	</div>

</body>
</html>
