<?php
error_reporting(0);
session_start();
	if(!isset($_SESSION['userName']))
	{
		header("location:login.php");
	}
	else if($_SESSION['UserType']=='Student')
	{
		header("location:login.php");
	}
	else if($_SESSION['UserType']=='Doctor')
	{
		header("location:login.php");
	}


$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM doctor";
$result=mysqli_query($data,$sql);

?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Doctor</title>
	<link rel="stylesheet" type="text/css" href="doctor.css">
	<style type="text/css">
		.table_th
		{
			padding: 20px;
			font-size: 20px;
		}
		.table_td
		{
			padding: 20px;
			background-color: skyblue;
		}
	</style>

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
		<h1>View Doctor Details</h1>
		<?php
		if($_SESSION['message'])
		{
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
		?>
		<br><br>
		<table border="1px">
			<tr>
				<th class="table_th">DoctorID</th>
				<th class="table_th">First Name</th>
				<th class="table_th">Last Name</th>
				<th class="table_th">Gender</th>
				<th class="table_th">PhoneNum</th>
				<th class="table_th">Specialization</th>
				<th class="table_th">Delete</th>
				<th class="table_th">Update</th>
			</tr>
			<?php
				while($info=$result->fetch_assoc())
				{


			?>
			<tr>
				<td class="table_td">
					<?php echo "{$info['docPhysicianID']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['FirstName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['LastName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Gender']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['PhoneNum']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Specialization']}";?>
				</td>

				<td class="table_td">
					<?php 
					echo "<a onClick=\" javascript:return confirm('Are you sure to delete this');\" href='delete.php?docPhysicianID={$info['docPhysicianID']}' class='btn btn-primary'>Delete</a>";?>
				</td>
				<td class="table_td">
					<?php
					echo "
					<a href='update.php?docPhysicianID={$info['docPhysicianID']}' class='btn btn-primary'>Update</a>";
					?>
				</td>
			</tr>
			<?php
			}
			?>

		
		</table>
		</center>

	</div>

</body>
</html>


