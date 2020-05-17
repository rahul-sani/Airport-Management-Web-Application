<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phno = $_POST['phno'];
$uname= $_POST['uname'];
$email= $_POST['email'];
$password = $_POST['password'];

if (!empty($fname) || !empty($lname) || !empty($phno) || !empty($uname) || !empty($email) || !empty($password)) {

    $servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "airport_management";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(!$connection) {
        die("connection failed: " . mysqli_connect_error());
    }
    else {
        
       
        $sql = "INSERT INTO users(fname,lname,phno,uname,email,password) VALUE ('$fname','$lname',$phno,'$uname','$email','$password')" ;
        echo $sql;
        
        if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('succesfully registered!');
            window.location.href='../html/login.php';
            </script>";  
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


    }

}
else {
    echo "All field required";
} 


?>