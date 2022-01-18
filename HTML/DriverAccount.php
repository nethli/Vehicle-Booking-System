<?php

include "../PHP/server.php" ;
include "sqlinsert.php";

/*$sql_create = "CREATE TABLE users(
                    userID INT AUTO_INCREMENT PRIMARY KEY,
                    FirstName VARCHAR(255),
                    LastName VARCHAR(255),
                    Gender VARCHAR (10) check (Gender in ('Female','Male')),
                    Email VARCHAR(255),
                    Password VARCHAR(16),
                    Address VARCHAR(255)
                )";

$sql_create = "CREATE TABLE driver(
                    LicenseNo VARCHAR(255),
                    userID INT,
                    FOREIGN KEY (userID) REFERENCES users(userID)             
                )";

$sql_create = "CREATE TABLE usercontact(
                    contact INT,
                    userID INT,
                    FOREIGN KEY (userID) REFERENCES users(userID)                                 
                )";

$result = mysqli_query($con,$sql_create);


if($result){
   echo "Table Created";
}
else{
   echo "Not created";
}*/
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Driver Account</title>

    <link rel = "stylesheet" href="../CSS/DriverStyling.css" type = "text/css">
    <script type = "text/javascript" src = "../JS/DriverFormValidation.js"></script>
</head>

<body>
    <div class = "main">
        <div class = "register">
            <h2> Driver Registration </h2>
            
            <form id = "register" method = "POST" name = "DriverForm"  onsubmit="return(DriverValidate());">

                <label>First Name</label>
                <br>
                <input type = "text" id = "name" name = "firstName" placeholder = "Enter your first name" autocomplete = "off" >
                <br><br>

                <label>Last Name</label>
                <br>
                <input type = "text" id = "name" name = "lastName" placeholder = "Enter your last name" autocomplete = "off" >
                <br><br>

                
                <label>Email</label>
                <br>
                <input type = "email" id = "name" name = "email" placeholder = "Enter your email" autocomplete = "off">
                <br><br>

                <label>Password</label>
                <br>
                <input type = "password" id = "name" name = "Password" placeholder = "Enter your password" autocomplete = "off">
                <br><br>

                <label>Address</label>
                <br>
                <input type = "text" id = "name"  name = "address" placeholder = "Enter your address" autocomplete = "off" >
                <br><br>

                <label>Contact Number</label>
                <br>
                <input type = "tel" id = "name" name = "telephone" placeholder = "Enter your contact number" pattern = "[0-9]{3}[0-9]{3}[0-9]{4}">
                <br><br>

                <label>License Number</label>
                <br>
                <input type = "text" id = "name" name = "license" placeholder = "Enter your license number" autocomplete = "off">
                <br><br>
               
                
                <label>Gender</label>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type= "radio" name = "gender" id= "male" value="Male"> Male
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type = "radio" name= "gender" id = "female" value="Female"> Female

                <br><br>
                <center>
                <input type = "submit" value= "Submit" name = "submit" id = "submit">

                <input type = "reset" value= "Reset" name = "reset" id = "reset">
                </center>

            </form>
        </div>
    </div>

</body>
</html>

