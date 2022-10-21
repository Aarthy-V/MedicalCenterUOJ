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
	$sql="SELECT Stu_firstName,Height,Weight,BloodGroup,PastMedicalDetails,PersonToNotifyIncaseOfEmergencyandPhoneNum FROM student, medical_record WHERE student.StudentID=medical_record.StudentID && student.StudentID='$id'" ;
	$result=mysqli_query($data,$sql);
	
}


?>

<div class="content">
		<center>
		<h1>View particular Student Medical Details</h1>
		<br><br>
		<form method="GET">
		<input type="text" name="id" placeholder="Insert Student ID:">
		<input type="submit" value="search" class='btn btn-primary'>
		</form>
		<br>
		<table border="1px">
			<tr>
				<th class="table_th">Student Name</th>
				<th class="table_th">Height</th>
				<th class="table_th">Weight</th>
				<th class="table_th">BloodGroup</th>
				<th class="table_th">Past Medical Details</th>
				<th class="table_th">Person To notify in emergency</th>
			</tr>
			
			<?php
				while($info=mysqli_fetch_array($result))
			{
			?>
				
			<tr>
				<td class="table_td">
					<?php echo "{$info['Stu_firstName']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Height']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['Weight']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['BloodGroup']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['PastMedicalDetails']}";?>
				</td>
				<td class="table_td">
					<?php echo "{$info['PersonToNotifyIncaseOfEmergencyandPhoneNum']}";?>
				</td>
				
			</tr>
			<?php
			}
			?>
		
		</table>
		</center>

	</div>

</html>