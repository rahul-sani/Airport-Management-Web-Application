<?php

$from= $_GET['from'];
$to=$_GET['to'];
$date=$_GET['date'];
$search=$_GET['submit'];

if(isset($search)) {
    $servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "airport_management"; 

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

    if(!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    } else {
        $sql = "SELECT flight_id,flight_name, fl_from,fl_to FROM flight_details where fl_from='$from' and fl_to='$to' and STR_TO_DATE('$date', '%m-%d-%Y')";
        $result = mysqli_query($connection, $sql);

    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
		<h1>Book Ticket with #FlightID</h1">
		<form action="bookticket1.php" method='GET' > 
			<input class="text" type="text" name="ticketnum" placeholder="#Flight ID" required>
			<br>
			<input class="formbutton" type="submit" value="flight_id">
		</form>
	</div>

	<div class="main">
		<h1>Search Results</h1>
		<p>*Select ID and book in the Book with #id tab</p>
		<br>
		<table class="searchtable" border="1px">
			<tr>
				<th>Flight ID</th>
				<th>Flight Name</th>
				<th>Departure</th>
				<th>Arrival</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){             
            ?>
            <tr>
                <th><?php echo $row.['flight_id']; ?></th>
                <th><?php echo $row.['flight_name']; ?></th>
                <th><?php echo $row.['fl_from']; ?></th>
                <th><?php echo $row.['fl_to']; ?></th>
            </tr>
            <?php
                } 
            ?>

		</table>
	</div>
	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>