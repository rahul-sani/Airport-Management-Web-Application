<?php

	session_start();
	$_SESSION['whereto'] = 'accounts';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<header>
		<h1><span id="plane">&#9992</span> Airport Management System</h1>
		<div class="login">
			<img class="loginicon" src="../image/user.svg">
			<br>
			<a class="loginbutton" href="backtohome.php">Admin</a>
		</div>
	</header>
	<div class="main">	

		<h1>Bookings</h1>		
		<ul class="menu">
			<li class="menuitem">
				<a href="report.php">View Report</a>
			</li>
			<li class="menuitem">
				<a href="remacc.php">Remove Account</a>
			</li>
		</ul>
	</div>
	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>