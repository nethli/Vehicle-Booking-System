<?php
    include '../PHP/server.php';

    if(isset($_POST['submit'])){

        $triptype     = $_POST['trip'];
        $pickup       = $_POST['pick'];
        $dropoff      = $_POST['drop'];
        $vehicletype  = $_POST['vehicletype'];
        $passengers   = $_POST['passengers'];
        $driver       = $_POST['driver'];

        do{
        
        $sql_insert = "INSERT INTO reservation(reservationID,triptype,pickuplocation,dropoflocation,passengers,userID) VALUES('',' $triptype ','$pickup','$dropoff','$vehicletype','$passengers','$useID')";
        $result     = mysqli_query($con,$sql_insert);
        }while(!$sql_insert); 
    } 
?>