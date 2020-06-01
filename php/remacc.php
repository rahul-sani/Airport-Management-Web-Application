<?php

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management"; 

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("Connection failed : " . mysqli_connect_error());
} else {
	$sql = "SELECT uname as 'username',CONCAT(fname,lname) as 'name',phno as 'number',password,email FROM users";
	$result = mysqli_query($connection, $sql);
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Remove Account</title>
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
			<a class="loginbutton" href="backtohome.php">Admin</a>
		</div>
	</header>

	<div class="main">
		<h1>Cancel Account by #username</h1">
		<form action="remacc2.php" method="GET" >
			<input class="text" type="text" name="id" placeholder="#USER NAME">
			<br>
			<input class="formbutton" type="submit" name ="delete" value="Cancel">
		</form>
	</div>

	<div class="main">
		<h1>Current Flight List</h1>
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

	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>