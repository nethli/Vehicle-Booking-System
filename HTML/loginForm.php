<?php
    include "../PHP/server.php" ;  
    require 'LoginValidation.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Linking CSS External Files-->
    <link rel = "stylesheet" href= "../CSS/loginStyling.css" type = "text/css">
    
    <!--Linking JS External Files-->
    <script src = 'https://kit.fontawesome.com/a076d05399.js'></script>


</head>
<body>
    <div class = "loginContainer">
        <div class = "content">

            <h1>Login Form</h1>
    
            <form method="POST" name = "login">
            <div class = "field">
                <span class = "fas fa-user-alt"></span>
                <input type = "text" name = "username" placeholder = "username" required id = "myname">">
            </div>

            <div class = "field space">
                <span class = "fas fa-lock"></span>
                <input type = "password" name = "password" placeholder = "password" required > 
            </div>

            <div class = "field space">
                <input type = "submit" value = "Login" name ="submit">
                
            </div>
    
        <div class ="acc"> Don't have account? <a href = "homepage.php" >Signup Now</a></div>
        </div>
    </div>  

</body>
</html>