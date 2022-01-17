<?php

    include '../PHP/server.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid']; // Getting the id from the url and assigning it to the id variable

        $sql1 = "delete from `users` where`userID`=$id";
        $sql2 = "delete from `customer` where`userID`=$id";
        $sql3 = "delete from `driver` where`userID`=$id";

        $result     = mysqli_query($con,$sql);

        if($result){
            echo "Deleted Successfully";
        }else{
            echo "Not Deleted";
        }
    }  

?>