<?php
    $con = new mysqli('localhost', 'root', '', 'vehclebookingsystem');

    if(!$con){
        die(mysqli_error($con));
    }
?>