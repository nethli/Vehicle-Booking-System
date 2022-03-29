<?php
    include '../PHP/server.php';

    //Checking that the all form values are entered and then inserting those values into the databases.

    if(isset($_POST['submit'])){
        $Fname      = $_POST['firstName'];
        $Lname      = $_POST['lastName'];
        $Gender     = $_POST['gender'];
        $Email      = $_POST['email'];
        $Password   = $_POST['Password'];
        $Address    = $_POST['address'];
        $Contact    = $_POST['telephone'];
        $BloodGroup = $_POST['bloodgroup'];

        do{
        $id = uniqid();
        $sql_insert1 = "INSERT INTO users(FirstName,LastName,Gender,Email,Password,Address,userID) VALUES ('$Fname', '$Lname', '$Gender', '$Email', '$Password', '$Address','$id')";
        $sql_insert2 = "INSERT INTO usercontact(userID,contact) VALUES('$id','$Contact')";
        $sql_insert3 = "INSERT INTO customer(userID,BloodGroup) VALUES ('$id','$BloodGroup')";  

        $_result = mysqli_query($con, $sql_insert1) or die ("Could Not Perform the Query1");
        $_result = mysqli_query($con, $sql_insert2) or die ("Could Not Perform the Query2");
        $_result = mysqli_query($con, $sql_insert3) or die ("Could Not Perform the Query3");
        }while(!$_result);    
    } 
?>