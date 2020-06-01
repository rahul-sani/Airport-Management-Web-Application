<?php

session_start();
if (isset($_POST['ticketnum'])) {
	$book_id = $_POST['ticketnum'];
}
else{
	$book_id = $_SESSION['book_id'];
}

$user = $_SESSION['username'];

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management"; 

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("Connection failed : " . mysqli_connect_error());
} else {

	$sql = "SELECT book_id,name,flight_name,date,departure,arrival,fl_from,fl_to FROM book_ticket where book_id = '$book_id' AND user = '$user' ";
    $result = mysqli_query($connection, $sql);

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
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
		<h1>Booked Tickets</h1>
		<br>
		<table class="searchtable" border="1px">
			<tr>
				<th>Ticket_id</th>
				<th>Passenger</th>
				<th>Travel Date</th>
				<th>Flight Name</th>
				<th>Departure</th>
				<th>Arrival</th>
				<th>Boarding</th>
				<th>Destination</th>
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