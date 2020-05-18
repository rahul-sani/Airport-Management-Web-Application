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

echo $departure;

$servername = "localhost";
    $username = "r4hu1";
    $dbpassword = "Sani_1234";
    $dbname = "airport_management";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(!$connection) {
        die("connection failed: " . mysqli_connect_error());
    } else {

        if(isset($flightAdd)) {

        // $sql = "INSERT INTO flight_details values($flight_id,'$flight_name','$from','$to',STR_TO_DATE('$date', '%m-%d-%Y'),STR_TO_DATE('$departure','%h:%i %p'),STR_TO_DATE('$arrival','%h:%i %p'))";
        // echo $sql;
        // echo "so far so good";


    
        } elseif(isset($flightRem)) {
            //Flight rem code here
        }

    }




       
//         $sql = "INSERT INTO users(fname,lname,phno,uname,email,password) VALUE ('$fname','$lname',$phno,'$uname','$email','$password')" ;
//         // echo $sql;
        
//         if (mysqli_query($connection, $sql)) {
//             echo "<script>
//             alert('succesfully registered!');
//             window.location.href='../html/login.html';
//             </script>";  
            
//         } else {
//             $sql="SELECT uname from users where uname='$uname'";
//             $result = mysqli_query($connection, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if($row['uname'] == $uname){
//                 echo "<script>
//                 alert('Username already in use,Change Username!');
//                 window.location.href='../html/createAccount.html';
//                 </script>";
//             } else{
                
//                 echo "Error: " . $sql . "<br>" . mysqli_error($connection);

//             }     
            
//         }


//     }

// }
// else {
//     echo "All field required";
// } 


?>