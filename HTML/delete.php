<?php

    include '../PHP/server.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid']; // Getting the id from the url and assigning it to the id variable

        $sql =  "DELETE users,driver,usercontact FROM users INNER JOIN driver ON users.userID = driver.userID INNER JOIN usercontact ON users.userID=usercontact.userID WHERE users.userID=driver.userID AND driver.userID=usercontact.userID" ;

        $result = mysqli_query($con,$sql);

        if($result){
            echo "Success";
        }else{
            echo "Fail";
        }

        /*$sql1 = "DELETE d.LicenseNo, d.userID, u.FirstName, u.LastName, u.Gender, u.Email, u.Password, u.Address, u.userID FROM driver d, users u WHERE d.userID = u.userID ";*/


        /*$sql = mysqli_query($con,$sql1)or die("Could Not Perform the Query1");*/
       /* $sql = mysqli_query($con,$sql3)or die("Could Not Perform the Query3");*/
    }
?>