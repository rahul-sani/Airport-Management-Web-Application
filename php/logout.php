<?php
    session_start();
    $name  = $_SESSION['username'];
    session_destroy();
    echo "<script>
    alert(' hello $name, you have  logged out succesfully!');
    window.location.href='../html/login.html';
    </script>";

?>