<?php
    include '../PHP/server.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <link rel = "stylesheet" href = "../CSS/logoutStyling.css">
</head>
<body>
    <button>LOGOUT</button>

    <div class = "popup" id="popup">
        <div class = "popup-header">
            <div class = "title">
                Are you sure you want to logout?
            </div>
            <button class = "close">&times;</button>

        </div>

        <div class = "popup-body">
            <p>If you logout now, you won't be log in without entering username and password.</p>
        </div>

        <div class = "popup-buttons">
            <button>CONFIRM</button> <br>    
            <button>CANCEL</button>
        </div>
    </div>

    <div class = "active" id ="overlay"></div>

</body>
</html>