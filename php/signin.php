<?php
$uname = $_POST['uname'];
$password = $_POST['password'];
$admin ='admin';

if(isset($_POST['login'])) {
    $servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "airport_management"; 

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    
    if(!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    } 
    else {
        $sql = "SELECT uname FROM users where uname = '$uname' and password= '$password' ";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) != 0){
            $row = mysqli_fetch_assoc($result);
            
            setcookie('username',$row['uname'],time()+3600);

            session_start();
            $_SESSION['username'] = $row['name'];

            if($row['uname'] == $admin) {
                header('location: adminDboard.php');
            }else {
                
                header('location: home.html');
            }
            
        } else {

            echo "<script>
           window.location.href='../html/login.html';
           alert('User not found ');
           </script>";

        }

    }
    

} else {
    header('location: ../html/login.html');
}

?>