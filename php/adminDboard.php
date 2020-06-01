
<?php
  session_start();

 $name = $_SESSION['username'];
 $count = $_SESSION['count'];
 if(isset($name) and $count==0) {
	 $_SESSION['count']=1;
     echo "<script>
    alert('Welcome to the System, $name ');
    </script>";
    
 } elseif (isset($name) and $count>0) {
	$_SESSION['count']=$_SESSION['count']+1;
 }
else {

	header("location: ../html/login.html");
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
			<img class="logouticon" src="../image/user.svg">
			<br>
			<a class="logoutbutton" href="logout.php">Logout?</a>
			<p class="logintext"><?php
			echo 'Hello <br>'.$_COOKIE['username']?></p>
		</div>
	</header>
	<div class="main">	

		<h1>Admin Home</h1>		
		<ul class="menu">
			<li class="menuitem">
				<a href="passengers.php" >Bookings</a>
			</li class="menuitem">
			<li class="menuitem"> 
				<a href="flights.php" >Flights</a>	
			</li>
			<li class="menuitem">
				<a href="accounts.php" >Accounts</a>
			</li>			
		</ul>
	</div>
	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>