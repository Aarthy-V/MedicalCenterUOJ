<?php

session_start();

$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['StudentID'])
{
	$id=$_GET['StudentID'];

	$sql="DELETE FROM student WHERE StudentID='$id'";
	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']='Delete student is successfull';
		header("location:delete_student.php");
	}
	else
	{
		$_SESSION['message']='Delete unsuccessful';
		header("location:delete_student.php");
	}
}

?>