<?php

$flight_id = $_GET['flight_id'];
$flight_name = $_GET['flight_name'];
$from = $_GET['fl_from'];
$to= $_GET['fl_to'];
$date= $_GET['date'];
$departure = $_GET['departure'];
$arrival = $_GET['arrival'];

$flightAdd= $_GET['add'];
$flightRem= $_GET['delete'];



$servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "airport_management";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(!$connection) {
        die("connection failed: " . mysqli_connect_error());
    } else {

        //Enter valid sql query
        $sql = "INSERT INTO bookticket values($flight_id,'$flight_name','$from','$to',STR_TO_DATE('$date', '%m-%d-%Y'),STR_TO_DATE('$departure','%h:%i %p'),STR_TO_DATE('$arrival','%h:%i %p'))";
        if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('Flight Ticker added to the db!');
            window.location.href='bookTicket.php';
            </script>";    
        } else{
                   
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            
        }
        


    
       
    }

    




?>