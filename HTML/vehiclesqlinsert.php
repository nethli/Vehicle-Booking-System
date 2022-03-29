<?php
    include '../PHP/server.php';

    if(isset($_POST['submit'])){

        $vehicleNo= $_POST['vehiclenumber'];
        $model    = $_POST['vehiclemodel'];
        $maker    = $_POST['vehiclemake'];
        $type     = $_POST['vehicletype'];
        $duration = $_POST['duration'];

            $select_driver = "SELECT FirstName FROM users, driver WHERE users.userID = driver.userID";

            $result    = mysqli_query($con,$select_driver);

            if(mysqli_num_rows($result)>0){ 
                while($driver = mysqli_fetch_array($result)){
                    $sql_insert  = "INSERT INTO vehicle(vehicleNo,vehicleModel,vehicleMaker,vehicleType,duration,userID) VALUES('$vehicleNo','$model','$maker','$type','$duration','$result'";
                    $result2    = mysqli_query($con,$sql_insert );
                }
                }
        }
?>
        




