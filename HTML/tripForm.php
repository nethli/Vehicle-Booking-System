<?php
    include '../PHP/server.php';
    include 'tripsqlinsert.php';

    /*$sql_create = "CREATE TABLE reservation(
	                        reservationID INT PRIMARY KEY AUTO_INCREMENT,
                            triptype VARCHAR(100) CHECK (triptype in ('One Way Trip','Return Trip')),
                            pickuplocation VARCHAR(255),
                            dropoflocation VARCHAR(255),
                            passengers INT,
                            userID VARCHAR(255),
                            FOREIGN KEY (userID) REFERENCES users(userID)
)"*/ 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Your Trip</title>

    <link rel="stylesheet" type="text/css" href="../CSS/TripFormStyling.css">
</head>

<body>
<div class = "main">
    <div class = "register">
        <h2>Plan Your Trip</h2>
    
        <form method = "POST" name="planTrip" id = "register">

        <input type = "radio" name="trip" id = "one" value = "One Way Trip">One Way trip
        &nbsp;&nbsp;&nbsp;&nbsp;

        <input type = "radio" name= "trip" id = "return" value="Return Trip">Return Trip
        <br><br>

        <label>Pickup Location</label>
        <br>
        <input type="text" name="pick" id="pick" placeholder="Pickup Location" autocomplete = "off">
        <br><br>

        <label>Drop off Location</label>
        <br>
        <input type="text" name="drop" id="drop" placeholder="Drop off Location" autocomplete = "off">
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

        <label>Number of Passengers</label>
        <br>
        <select name = "passengers">
            <option value = "Not chosen">Choose Yours</option>
            <option value = "Max Passengers 2">Max Passengers 2</option>
            <option value = "Max Passengers 4">Max Passengers 4</option>
            <option value = "Max Passengers 6">Max Pssengers 6</option>
            <option value = "Max Psasengers 10">Max Pssengers 10</option>
        </select>
        <br><br>

        <label>Choose your driver</label>
        <br>
        
        <!--Query for Selecting drivers from the database using users and driver tables-->
        <?php 
            $sql = "SELECT users.userID FROM users, driver WHERE users.userID = driver.userID";

            $result = mysqli_query($con,$sql);

            if($result){ 

                /*mysqli_num_rows() - Function to check whether the existing number of rows.*/                
                
                if(mysqli_num_rows($result)>0){
                    echo '<select name="driver">
                    <option value="Have not chosen">Choose a driver</option>';

                /*While a row of data exists, put that row in $driver as an associative array*/

                    while($driver = mysqli_fetch_assoc($result)){
                        echo  '<option value = '.$driver['FirstName'].'>'.$driver['FirstName'].'</option>';                  
                    }
                    echo '</select>';
                }
            }
        ?>

        <br><br>
        <center>
        <input type = "submit" name="submit" value="Place Booking" id = "submit">
        </center>

    </form>
</body>
</html>