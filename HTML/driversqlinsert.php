<?php

include '../PHP/server.php';

       if(isset($_POST['submit'])){
        
        $Fname     = $_POST['firstName'];
        $Lname     = $_POST['lastName'];
        $gender    = $_POST['gender'];
        $email     = $_POST['email'];
        $password  = $_POST['Password'];
        $address   = $_POST['address'];
        $telephone = $_POST['telephone'];
        $license   = $_POST['license'];
        
        do{
            $id=uniqid();
            $sql_insert1   = "INSERT INTO users(userID,FirstName,LastName,Gender,Email,Password,Address) VALUES ('$id','$Fname','$Lname','$gender','$email','$password','$address')";
            $sql_insert2   = "INSERT INTO driver(userID,LicenseNo) VALUES ('$id','$license')";
            $sql_insert3   = "INSERT INTO usercontact(userID,contact) VALUES ('$id','$telephone')";

            $sql= mysqli_query($con,$sql_insert1)or die("Could Not Perform the Query1");
            $sql=mysqli_query($con,$sql_insert2)or die("Could Not Perform the Query2");
            $sql=mysqli_query($con,$sql_insert3)or die("Could Not Perform the Query3");
        }while(!$sql);

        } 
?>