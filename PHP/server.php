<?php
    $con = new mysqli('localhost', 'root', '', 'vehiclebookingsystem');

    if(!$con){
        die(mysqli_error($con));
    }
?>