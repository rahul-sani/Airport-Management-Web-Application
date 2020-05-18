<?php
    session_start();
    $name  = $_SESSION['username'];
    session_destroy();
    if($name == 'sys'){
    	echo "<script>
	    alert('System User, Logged Out!');
	    window.location.href='../html/login.html';
	    </script>";
	}
	elseif ($name == 'admin') {
	 		echo "<script>
		    alert('Admin, Logged Out');
		    window.location.href='../html/login.html';
		    </script>";   	
	    }else {  
			    echo "<script>
			    alert(' Hello $name, you have  logged out succesfully!');
			    window.location.href='../html/login.html';
			    </script>";
	 	}    
?>
    

?>