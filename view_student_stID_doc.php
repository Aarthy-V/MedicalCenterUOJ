<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Student</title>
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

</body>
<?php
error_reporting(0);
$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="SELECT StudentID, NIC, FacultyName, BatchName,Stu_firstName,Stu_lastName,Gender,DOB,PhoneNum,PermanentAddress FROM student, batch, faculty WHERE batch.BatchID=student.BatchID && faculty.FacultyID=student.FacultyID && StudentID='$id'" ;
	$result=mysqli_query($data,$sql);
	
}


?>

<div class="content">
		<center>
		<h1>View particular Student Details</h1>
		<br><br>
		<form method="GET">
		<input type="text" name="id" placeholder="Insert Student ID:">
		<input type="submit" value="search" class='btn btn-primary'>
		</form>
		<br>
		<table border="1px">
			<tr>
				<th class="table_th">StudentID</th>
				<th class="table_th">NIC</th>
				<th class="table_th">BatchName</th>
				<th class="table_th">FacultyName</th>
				<th class="table_th">Firstname</th>
				<th class="table_th">LastName</th>
				<th class="table_th">Gender</th>
				<th class="table_th">DOB</th>
				<th class="table_th">PhoneNum</th>
				<th class="table_th">PermanemtAddr</th>
			</tr>
			
			<?php
				while($info=mysqli_fetch_array($result))
			{
			?>
				
			<tr>
				<td class="table_td">
					<?php echo "{$info['StudentID']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['NIC']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['BatchName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['FacultyName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Stu_firstName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Stu_lastName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Gender']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['DOB']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['PhoneNum']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['PermanentAddress']}";?>
				</td>
			</tr>
			<?php
			}
			?>
		
		</table>
		</center>

	</div>

</html>