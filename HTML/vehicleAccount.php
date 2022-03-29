<?php
    include '../PHP/server.php';
    include 'vehiclesqlinsert.php';

    /*sql_create =    "CREATE TABLE vehicle(
	                    vehicleNo VARCHAR(255),
                        vehicleModel VARCHAR(255),
                        vehicleMaker VARCHAR(255),
                        vehicleType VARCHAR(255),
                        duration VARCHAR(40) CHECK (duration IN('Full Time','Part Time')),
                        userID VARCHAR(255),
                        FOREIGN KEY (userID) REFERENCES users(userID),
                        PRIMARY KEY(vehicleNo) 
                    )";
                    
                    $result = mysqli_query($con,$sql_create);
                    
                    if($result){
                        echo "Table Created";
                    }else{
                        echo "Not created";
                    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Vehicle Account</title>

    <link rel = "stylesheet" href="../CSS/VehicleStyling.css" type = "text/css">
    <script type = "text/javascript" src = "../JS/VehicleFormValidation.js"></script>

</head>

<body>
    <div class = "main">
        <div class = "register">
            <h2>Vehicle Registration</h2>
            
            <form id = "register" method = "POST" name = "VehicleForm" onsubmit="return(VehicleValidate());">

                <label>Vehicle Number</label>
                <br>
                <input type = "text" id = "name" name = "vehiclenumber" placeholder = "Vehicle Number" autocomplete = "off" >
                <br><br>

                <label>Vehicle Model</label>
                <br>
                <input type = "text" id = "name" name = "vehiclemodel" placeholder = "Vehicle Model" autocomplete = "off">
                <br><br>

                <label>Vehicle Make</label>
                <br>
                <input type = "text" id = "name" name = "vehiclemake" placeholder = "Vehicle Make" autocomplete = "off">
                <br><br>
 
                <label>Vehicle Type</label>
                <br>
                <select name = "vehicletype">
                    <option value = "Not chosen">Choose Yours</option>
                    <option value = "Tuk">Tuk</option>
                    <option value = "Cab">Cab</option>
                    <option value = "Mini Van">Mini Van</option>
                    <option value = "Van">Van</option>
                </select>
                <br><br>

                <label>Duration</label>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type= "radio" name = "duration" id= "full" value="Full Time">Full Time
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type = "radio" name= "duration" id = "part" value="Part Time">Part Time
                <br><br>
                
                <center>
                <input type = "submit" value= "Submit" name = "submit" id = "submit">

                <input type = "reset" value= "Reset" name = "reset" id = "reset">
                </center>

            </form>
        </div>
</body>
</html>