<?php

    include '../PHP/server.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid']; // Getting the id from the url and assigning it to the id variable

        $sql1 = "DELETE*FROM users WHERE userID = $id";
        $sql2 = "DELETE FROM customer WHERE userID = $id";
        $sql3 = "DELETE FROM driver WHERE userID = $id";


        $sql = mysqli_query($con,$sql1)or die("Could Not Perform the Query1");
        $sql = mysqli_query($con,$sql2)or die("Could Not Perform the Query2");
        $sql = mysqli_query($con,$sql3)or die("Could Not Perform the Query3");
    }
?>