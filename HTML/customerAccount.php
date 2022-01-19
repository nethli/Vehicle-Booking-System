<?php
    include '../PHP/server.php';
    include 'customersqlinsert.php';

    //Creation of tables 
    $sql_create1 = "CREATE TABLE customer(
        BloodGroup VARCHAR(255),
        userID INT,
        FOREIGN KEY (userID) REFERENCES users(userID)
    )";

    $result = mysqli_query($con, $sql_create1);

    if(!$result){
        echo "Not Created";
    }else{
        echo "Created";
    }
?>

<!--Customer Form Creation-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Customer Account</title>

    <link rel = "stylesheet" href="../CSS/CustomerStyling.css" type = "text/css">
    <script type = "text/javascript" src = "../JS/CustFormValidation.js"></script>
</head>

<body>
    <div class = "main">
        <div class = "register">
            <h2>Customer Registration</h2>
            
            <form id = "register" method = "POST" name = "CustForm" onsubmit="return(custValidate());">

                <label>First Name</label>
                <br>
                <input type = "text" id = "name" name = "firstName" placeholder = "Enter your first name" autocomplete = "off" >
                <br><br>

                <label>Last Name</label>
                <br>
                <input type = "text" id = "name" name = "lastName" placeholder = "Enter your last name" autocomplete = "off">
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
                <input type = "text" id = "name"  name = "address" placeholder = "Enter your address" autocomplete = "off">
                <br><br>

                <label>Contact Number</label>
                <br>
                <input type = "tel" id = "name" name = "telephone" placeholder = "Enter your contact number" pattern = "[0-9]{3}[0-9]{3}[0-9]{4}">
                <br><br>

                

                <label>Blood Group</label>
                <br>
                <select name = "bloodgroup">
                    <option value = "-1">Choose Yours</option>
                    <option value = "1">A+</option>
                    <option value = "2">A-</option>
                    <option value = "3">B+</option>
                    <option value = "4">B-</option>
                    <option value = "5">O+</option>
                    <option value = "6">O-</option>
                    <option value = "7">AB+</option>
                    <option value = "8">AB-</option>
                </select>
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
 

</body>
</html>