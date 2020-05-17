<?php
  session_start();

 $name = $_SESSION['username'];
 $count = $_SESSION['count'];
 if(isset($name) and $count==0) {
	 $_SESSION['count']=1;
     echo "<script>
    alert('Welcome to the System, $name user');
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
	<title>System User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<header>
		<h1><span id="plane">&#9992</span> Airport Management System</h1>
		<img id="loginicon" src="../image/user.svg">
		<br>
		<a id="logoutbutton" href="logout.php">Logout?</a>
		<p id="logintext">Hello SysUser</p>
	</header>
	<div class="main">	

		<h1>System User Home</h1>		
		<ul class="menu">
			<li class="menuitem">
				<a href="../preBook.html">Book Ticket</a>
			</li class="menuitem">
			<li class="menuitem"> 
				<a href="../index.html">Search Ticket</a>	
			</li>
			</li>			
		</ul>
	</div>
	<footer>
		<h1>Software engineering project</h1>
	</footer>
</body>
</html>

</body>
</html>