<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management";  

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
if(!$connection) {
    die("connection failed: " . mysqli_connect_error());
} else {
	$sql = "DELETE FROM users WHERE uname = '$id'";
	if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('User Removed!');
            window.location.href='remacc.php';
            </script>";    
            } 
    }
?>