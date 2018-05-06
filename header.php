<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">	
			<a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png">CS Toronto</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.html">Home</a></li>
			<li><?php 
			if(isset($_SESSION['userid'])){?>
				<a href ='includes/logout.inc.php'><img src='glyphicons/glyphicons-logout.png' style='background-color:white'>LogOut</a>
				<?php } else { ?>
				    <a href='login.html'><img src='glyphicons/glyphicons-login.png' style='background-color: white'>Login</a>
				<?php } ?>
			</li>
			<li><a href="signUp.html"><img src="glyphicons/glyphicons-user.png" style="background-color: white">SignUp</a></li>
		</ul>
	</div>
	</nav>	
		  
	
	