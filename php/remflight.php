<?php

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management"; 

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("Connection failed : " . mysqli_connect_error());
} else {
	$sql = "SELECT flight_id,flight_name,fl_from,fl_to,date,departure,arrival FROM flight_details";
	$result = mysqli_query($connection, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Flight</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<h1><span id="plane">&#9992</span> Airport Management System</h1>
		<div class="login">
			<img class="loginicon" src="../image/user.svg">
			<br>
			<a class="loginbutton" href="backtohome.php">Home</a>
		</div>
	</header>

	<div class="main">
		<h1>Cancel Flight by #id</h1">
		<form action="flight_control.php" method="GET" >
			<input class="text" type="text" name="flight_id" placeholder="#Flight ID">
			<br>
			<input class="formbutton" type="submit" name ="delete" value="Cancel">
		</form>
	</div>

	<div class="main">
		<h1>Current Flight List</h1>
		<table class="searchtable" border="1px">
			<tr>
				<th>Flight ID</th>
				<th>Flight Name</th>
				<th>Boarding</th>
				<th>Destination</th>
				<th>Date</th>
				<th>Departure</th>
				<th>Arrival</th>
            </tr>
            <?php

            	while ($row = mysqli_fetch_assoc($result)) {
            		echo "<tr>";
			    	foreach ($row as $key => $value) {
				    	echo "<td>".$value."</td>";				
				    }
				    echo "</tr>";
			    }
	        ?>
		</table>
	</div>

	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>