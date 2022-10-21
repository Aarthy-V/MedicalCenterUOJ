<?php

session_start();

$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['docPhysicianID'])
{
	$id=$_GET['docPhysicianID'];

	$sql="DELETE FROM doctor WHERE docPhysicianID='$id'";
	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']='Delete doctor is successfull';
		header("location:view_doctor.php");
	}
	else
	{
		$_SESSION['message']='Delete unsuccessful';
		header("location:view_doctor.php");
	}
}

?>