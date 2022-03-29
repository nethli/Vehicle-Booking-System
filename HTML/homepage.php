<?php
  include '../PHP/server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Type Selection</title>

    <!--Linking Bootstrap External Files-->
    <link rel = "stylesheet" type="text/css" href = "../CSS/HomePageStyling.css">
    
    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>FASTER.. SAFER.. SMARTER..</h1>
    <h2>We take out the hassle and bring back the joy of traveling.</h2>
  
    <center>
    <table>
        <tr>
            <td><div class="card" style="width: 20rem;">
                <img class="card-img-top" src="../SRC/driver1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Signup to Drive with Baymax</h5>
                  <p class="card-text">Click the following button to create driver account.</p>
                  <center><a href="../HTML/DriverAccount.php" class="btn btn-primary">Create Driver Account</a></center>
                </div>
              </div>
            </td>
            
            &nbsp;&nbsp;&nbsp;&nbsp;

            <td>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="../SRC/customer6.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Signup to Ride with Baymax</h5>
                      <p class="card-text">Click the following button to create customer account.</p>
                      <center><a href="../HTML/customerAccount.php" class="btn btn-primary">Create Customer Account</a></center>
                    </div>
                  </div>
            </td>
        </tr>
      
      </table>
    </center>

</body>
</html>