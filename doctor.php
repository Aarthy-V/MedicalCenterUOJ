<?php
session_start();
	if(!isset($_SESSION['userName']))
	{
		header("location:login.php");
	}
	else if($_SESSION['UserType']=='Student')
	{
		header("location:login.php");
	}
	else if($_SESSION['UserType']=='Admin')
	{
		header("location:login.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor Dashboard</title>
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
				<a href="view_student_stID_doc.php">View particular Student</a>
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
		<h1>Welcome to dashboard</h1>
	</div>

</body>
</html>