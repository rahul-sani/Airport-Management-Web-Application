<?php 

	session_start();
	if($_SESSION['username']=='sys'){
    	echo "<script>
    			alert('Ticket Booked Succesfully!');
    			window.location.href='result.php';
    		</script>";
	}
	else{
		$name = $_SESSION['username'];
		echo "<script>
    			alert('$name, Your Ticket is Booked!');
    			window.location.href='viewticket.php';
    		</script>";

	}

?>
