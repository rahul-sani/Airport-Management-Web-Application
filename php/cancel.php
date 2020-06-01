<?php
	
$cancel = $_POST['cancel_id'];

session_start();
$user = $_SESSION['username'];

$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management"; 

$connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("Connection failed : " . mysqli_connect_error());
} else {

	$sql = "DELETE FROM book_ticket WHERE book_id = '$cancel' AND user = '$user'";
    if ($result = mysqli_query($connection, $sql)) {
    
        mysqli_fetch_assoc($result);
        echo "<script>
        alert('Canceled ticket, # $cancel ');
        </script>";
        header("location: backtohome.php");
        
        }
    else{

        echo "<script>
        alert('Error canceling!');
        </script>";
        header("location: backtohome.php");

        }
    }

    
?>
