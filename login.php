<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body background="login.png" class="body_deg">
	<ul>
		<li><a href="index.php" class="btn btn-success" >Back</a></li>
		
	</ul>
	<center>
		<div class="form_deg">
			<h1><center class="title_deg" style="color:black">
				Login Form
				<h4>
					<?php
						error_reporting(0);
						session_start();
						session_destroy();
						echo $_SESSION['loginMessage'];
					?>

				</h4>
			</center></h1>

			<form action="login_check.php" method="POST" class="login_form">
				<div>
					<label class="label.deg">Username</label>
					<input type="text" name="username" placeholder="user">
				</div>

				<div>
					<label class="label.deg">Password</label>
					<input type="password" name="password" placeholder="****">
				</div>

				<div>
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>
		</div>
	</center>
</form>
</div>
</center>
</body>
</html>

