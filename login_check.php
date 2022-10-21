<?php

error_reporting(0);
session_start();

$host="localhost:3307";
$user="root";
$password="";
$db="medicalcenterappointment_uoj";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['username'];
	$pass=$_POST['password'];

	$sql="select * from user where userName ='".$name."' AND password='".$pass."' ";

	$result=mysqli_query($data, $sql);

	$row=mysqli_fetch_array($result);

	if($row["UserType"]=="Student")
	{

		$_SESSION['userName']=$name;
		$_SESSION['UserType']="Student";
		header("location:student.php");
	}
	else if($row["UserType"]=="Doctor")
	{
		$_SESSION['userName']=$name;
		$_SESSION['UserType']="Doctor";
		header("location:doctor.php");
	}
	else if($row["UserType"]=="Admin")
	{
		$_SESSION['userName']=$name;
		$_SESSION['UserType']="Admin";
		header("location:admin.php");
	}
	else
	{
		
		$message= "username or password do not match";
		$SESSION['loginMessage']=$message;
		header("location:login.php");
	}
}


?>