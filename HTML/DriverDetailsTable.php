<?php
    include('../PHP/server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Driver Details</title>

    <link rel = "stylesheet" type="text/css" href="../CSS/DriverDetailsTableStyling.css">

</head>
<body>
    <div class = "Container">
        <div class = "content">

        <h1>User Details</h1>
    <table border = "1">
        <tr>
            <th>userID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Operations</th>
        </tr>

        

    <?php
        $sql = "SELECT*FROM `users`";
        $result = mysqli_query($con,$sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id      = $row['userID'];
                $fname   = $row['FirstName'];
                $lname   = $row['LastName'];
                $email   = $row['Email'];
                $pword   = $row['Password'];
                $gender  = $row['Gender'];
                $address = $row['Address'];

                echo '<tr> 
                        <td>'.$id.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$email.'</td>
                        <td>'.$pword.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$address.'</td>
                        <td> 
                        <button class = "buttons"><a href = "update.php? updateid = '.$id.'">UPDATE</a></button> <br><br>
                        <button class = "buttons"><a href = "delete.php? deleteid =" '.$id.'>DELETE</a></button>

                        
                        </td>
                    </tr>';
                
            }
        }
    ?>

</table>
</div>
</div>
</body>
</html>