<?php

	session_start();
    $name  = $_SESSION['username'];


    if($name == 'admin'){
    	echo "<script>
	    window.location.href='adminDboard.php';
	    </script>";
	}
    elseif($name == 'sys'){
    	echo "<script>
	    window.location.href='sysHome.php';
	    </script>";
	}
	else{
		echo "<script>
	    window.location.href='home.php';
	    </script>";

	}
?>