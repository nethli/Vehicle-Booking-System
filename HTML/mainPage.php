<?php
    include '../PHP/server.php';
    include 'LoginValidation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <!--Linking CSS External Files-->
    <link rel = "stylesheet" href = "../CSS/MainPageStyling.css">
    
    <!--Linking Bootstrap External Files-->
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Linking JS External Files-->
   <script type="text/javascript" src = 'https://kit.fontawesome.com/a076d05399.js'></script>


</head>

<body>
<!--Navigation Bar-->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Welcome <?php echo ucfirst($_SESSION['FirstName']) ."!!";?></h5>
          <span class="text-muted">For a safe ride ...</span>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <span class="fas fa-user-alt"><p align = "right"><font color="white"><?php echo ($_SESSION['FirstName']);?></font></p></span>
        </div>
    </nav>

<!--Navigation Drawer-->
    <ul>
            <li><a href = "">Home</a></li>
            <li><a href = "DriverAccount.php">Create a Driver Account</a></li>
            <li><a href = "customerAccount.php">Create a Customer Account</a></li>
            <li><a href = "loginForm.php">Sign up</a></li>
            <li><a href = "loginForm.php">Home</a></li>
            <li><a href = "loginForm.php">About</a></li>
            <li><a href = "loginForm.php">News</a></li>
            <li><a href = "loginForm.php">Sign up</a></li> 
            <li><a href = "loginForm.php">Home</a></li>
            <li><a href = "loginForm.php">About</a></li>
            <li><a href = "loginForm.php">News</a></li>
            <li><a href = "loginForm.php">Home</a></li>
            <li><a href = "loginForm.php">About</a></li>
            <li><a href = "loginForm.php">News</a></li>
            <li><a href = "loginForm.php">Home</a></li>
            <li><a href = "loginForm.php">Logout</a></li>
            <li><a href = "loginForm.php">News</a></li>
            <li><a href = "loginForm.php">Sign up</a></li>        
    </ul>    
<!--Define Footer-->
   <footer>
            <p>&copy; 2022 Baymax Transportaion Service</p>
   </footer>

</body>
</html>