<?php
    include '../PHP/server.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Displaying Customer Details</title>
 
    <!--Linking CSS External Files-->
    <link rel = "stylesheet" type="text/css" href="../CSS/CustomerDetailsTableStyling.css">

    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>

<body>
<form method ="POST">
<div class = "Container">
    <div class = "Content">
    <h2>Customer Details</h2>

    <!--Creating the table-->
        <center> 
               <table border = "1">
                <tr>
                    <th><center>Customer ID</center></th>
                    <th><center>First Name</center></th>
                    <th><center>Last Name</center></th>
                    <th><center>Email</center></th>
                    <th><center>Password</center></th>
                    <th><center>Gender</center></th>
                    <th><center>Address</center></th>
                    <th><center>Blood Group</center></th>
                    <th><center>Operations</center></th>
                </tr>

                <?php  
                
                /*Sql query for retrieve customer details*/ 

                    $sql = "SELECT u.FirstName, u.LastName,u.Gender,u.Email,u.Password,u.Address,u.userID,c.BloodGroup FROM users u,customer c WHERE u.userID = c.userID";
                    $result = mysqli_query($con,$sql);

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id       = $row['userID'];
                            $fname    = $row['FirstName'];
                            $lname    = $row['LastName'];
                            $email    = $row['Email'];
                            $pword    = $row['Password'];
                            $gender   = $row['Gender'];
                            $address  = $row['Address'];
                            $blood    = $row['BloodGroup'];

                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$lname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$pword.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$address.'</td>
                                <td>'.$blood.'</td>
                                
                                <td>
                                <button type="button" class="btn btn-primary"><a href= "customerupdate.php? updateid= '.$id.'" class ="text-light"><Update</a></button>
                                <button type="button" class="btn btn-danger"> <a href= "customerdelete.php? deleteid='.$id.'"  class ="text-light">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }

                ?>

            </table>
        </center>
    </div>
</div>
</form>
</body>
</html>