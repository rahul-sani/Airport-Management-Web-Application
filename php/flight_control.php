<?php

$flight_id = $_GET['flight_id'];
if(isset($_GET['add'])){
    $flight_name = $_GET['flight_name'];
    $from = $_GET['fl_from'];
    $to= $_GET['fl_to'];
    $date= $_GET['date'];
    $departure = $_GET['departure'];
    $arrival = $_GET['arrival'];
    $flightAdd= $_GET['add'];
}
elseif(isset($_GET['delete'])){
    $flightRem= $_GET['delete'];
}


$servername = "localhost";
    $username = "software_proj";
    $dbpassword = "soft_proj";
    $dbname = "airport_management";  

    $connection = mysqli_connect($servername, $username,$dbpassword,$dbname);
    if(!$connection) {
        die("connection failed: " . mysqli_connect_error());
    } else {

        if(isset($flightAdd)) {

            $sql = "INSERT INTO flight_details values('$flight_id','$flight_name','$from','$to','$date','$departure','$arrival')";
            
            if (mysqli_query($connection, $sql)) {
                echo "<script>
                alert('Flight Service succesfully added to the db!');
                window.location.href='adminDboard.php';
                </script>";    
                } 
                $sql="SELECT flight_id from flight_details where flight_id='$flight_id'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row['flight_id'] == $flight_id){
                    echo "<script>
                    alert('A Flight with the same ID exist!');
                    window.location.href='adminDboard.php';
                    </script>";
                    } else{          
                         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                    }       

                }


    
         elseif(isset($flightRem)) {
            
            $sql = "DELETE FROM flight_details WHERE flight_id = '$flight_id'";
            if ($result = mysqli_query($connection, $sql)) {
                echo "<script>
                alert('Flight succesfully removed!');
                window.location.href='remflight.php';
                </script>";     
                }
            else{
                echo "<script>
                alert('No Flight with id # $flight_id!');
                window.location.href='adminDboard.php';
                </script>";
                }
            }    

        }

    
?>