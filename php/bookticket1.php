<?php
$flightid=$_GET['flight_id'];
$_COOKIE['flight_id'] = $flightid;
?>


<!DOCTYPE html>
<html>
<head>
	<title>BOOK TICKET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1><span id="plane">&#9992</span> Airport Management System</h1>
		<div class="login">
			<img class="loginicon" src="image/user.svg">
			<br>
			<a class="loginbutton" href="php/backtohome.php">Home</a>
		</div>
	</header>
	<div class="main">
		<h1>Book Ticket</h1>
		<form action="php/bookticket2.php" method='GET'>

			<input type="text" class="text" placeholder="First Name" name='fname'>
			<input type="LastName" class="text" placeholder="Last Name" name= 'lname'>
			<input type="PhoneNumber" class="text" placeholder="Phone Number" value='ph_no'>
			<label class="formlabel"for="birthday">Date Of Birth</label>
			<input type="date" class="date" id="birthday" name="date"><br>
			<input type="submit" name="submit" class="formbutton" value="Book">
		</form>
	</div>
	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>