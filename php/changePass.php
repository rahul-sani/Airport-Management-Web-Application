<?php
session_start();

$uname = $_SESSION['username'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];

if($pass1==$pass2 and isset($uname)){
    $servername = "localhost";
    $username = "software_proj";
    $dbpassword = "soft_proj";
    $dbname = "airport_management"; 

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);

    if(!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    } else {
        $sql = "UPDATE users set password='$pass1' WHERE uname='$uname' ";
        $result = mysqli_query($connection, $sql);

        echo "<script>
        alert('Successfully changed password!');
        window.location.href='home.php';
        </script>";
        
    }

} else {
    echo "diff";
}
?>