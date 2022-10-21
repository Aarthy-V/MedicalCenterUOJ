<?php



$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['ADD']))
{
	$docID=$_POST['id'];
	$date=$_POST['date'];
	$open=$_POST['Otime'];
	$close=$_POST['Ctime'];

	$sql="INSERT INTO available_time (docPhysicianID,available_date,OpenTime,ClosedTime) VALUES ('$docID','$date','$open','$close')";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Upload successfully";
	}
	else
	{
		echo "Upload failed";
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
		<a href="doctor.php">Doctor Dashboard</a>
		<div class="logout">
			<a href="login.php" class="btn btn-primary">LOGOUT</a>
		</div>
	</header>
	<aside>
		<ul>
			<li>
				<a href="view_student_stID_doc.php">View particular Students</a>
			</li>
			<li>
				<a href="view_medical.php">View student Medical record</a>
			</li>
			<li>
				<a href="view_appointment.php">View appointments</a>
			</li>
			<li>
				<a href="add_available_time.php">Add available time</a>
			</li>
		</ul>
	</aside>

	<div class="content">
		<center>
		<h1>Add available time</h1>
		<div class="div_deg">
			<form action="#" method="POST">
				<div>
					<label>docPhysicianID</label>
					<input type="text" name="id">
				</div>
				<div>
					<label>Date</label>
					<input type="text" name="date">
				</div>
				<div>
					<label>Open Time</label>
					<input type="text" name="Otime">
				</div>
				<div>
					<label>Close Time</label>
					<input type="text" name="Ctime">
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
