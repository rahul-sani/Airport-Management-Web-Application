<?php

session_start();
$flight_id = $_SESSION['flight_id'];
$from = $_SESSION['from'];
$to= $_SESSION['to'];
$date= $_SESSION['date'];
$user=$_SESSION['username']; 

$name=$_GET['fname']." ".$_GET['lname'];
$phno=$_GET['ph_no'];
$bday=$_GET['bday'];


$servername = "localhost";
$username = "software_proj";
$dbpassword = "soft_proj";
$dbname = "airport_management";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(mysqli_connect_errno()) {
        die("connection failed: " . mysqli_connect_error());
    } else {

        $sql = "SELECT flight_name, departure,arrival FROM flight_details where flight_id = '$flight_id' ";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $flight_name = $row['flight_name'];
        $departure = $row['departure'];
        $arrival = $row['arrival'];

        $sql = "SELECT max(book_id) as a FROM book_ticket";
        mysqli_query($connection, $sql);
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $book_id = $row['a']+1;

        $sql = "INSERT INTO book_ticket values('$book_id','$flight_id','$user','$flight_name','$name','$phno','$bday','$from','$to','$date','$departure','$arrival')";
        if (mysqli_query($connection, $sql)) {
            $_SESSION['book_id'] = $book_id;
            echo "<script>
            window.location.href='bookTicket.php';
            </script>";    
        } else{
                echo "<script>
                alert('Problem Occured!');
                </script>";   
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            
        }
        


    
       
    }

    




?>