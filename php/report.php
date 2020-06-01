<?php

session_start();
if($_SESSION['whereto'] == 'passengers'){
	$sql = "SELECT * FROM book_ticket";

}
if ($_SESSION['whereto'] == 'flights') {
	$sql = "SELECT * FROM flight_details";

	} 
if($_SESSION['whereto'] == 'accounts') {
		$sql = "SELECT * FROM users";
		}

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management"; 

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("Connection failed : " . mysqli_connect_error());
} else {
	
	$result = mysqli_query($connection, $sql);
	$_SESSION['passengers'] = '0';
	$_SESSION['flights'] = '0';
	$_SESSION['accounts'] = '0';
}
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
		<h1>Report</h1>
		<table class="searchtable" border="1px">
            <?php
            	$headings = 1;
            	while ($row = mysqli_fetch_assoc($result)) {
       
       				if ($headings == 1) {
            				echo "<tr>";
            				$headings = 0;
            				foreach ($row as $key => $value) {
				    			echo "<th>".$key."</th>";	
				    		}
				    		echo "</tr>";
            		
				    }
            		echo "<tr>";
			    	foreach ($row as $key => $value) {
				    	echo "<td>".$value."</td>";				
				    }
				    echo "</tr>";
			    	
				}
	        ?>
	</div>
	<!-- <footer>
		<h1>Software engineering project</h1>
	</footer> -->
</body>
</html>
