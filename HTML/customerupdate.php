<?php
    include '../PHP/server.php';
?>
   
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
                    <option value = "A+">A+</option>
                    <option value = "A-">A-</option>
                    <option value = "B+">B+</option>
                    <option value = "B-">B-</option>
                    <option value = "O+">O+</option>
                    <option value = "O-">O-</option>
                    <option value = "AB+">AB+</option>
                    <option value = "AB-">AB-</option>
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
                <input type = "submit" value= "UPDATE" name = "submit" id = "submit">
                </center>

            </form>
        </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $Fname      = $_POST('firstName');
        $Lname      = $_POST('lastName');
        $gender     = $_POST('gender');
        $email      = $_POST['email'];
        $password   = $_POST['Password'];
        $address    = $_POST['address'];
        $telephone  = $_POST['telephone'];
        $BloodGroup = $_POST['bloodgroup'];

        if(isset($_GET['updateid'])){
            $id = $_GET['updateid'];

            $sql_update  = "UPDATE customer SET BloodGroup = '$BloodGroup', userID = '$id'";
            $sql_update  = "UPDATE usercontact SET contact = '$telephone', userID = '$id'";
            $sql_update  = "UPDATE users SET firstName = '$Fname' , lastName = '$Lname', gender = '$gender', email = '$email', Password = '$password', address = '$address' , userID= '$id'";

            $result = mysqli_query($con,$sql_update);

            if($result){
                echo "Updated";
            }else{
                echo "Not Updated";
            }
        }
    }

?>