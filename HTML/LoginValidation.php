<?php

include '../PHP/server.php';

//Alert Boxes

/*function alertMsg($msg){
        echo '<script type = "text/javascript"> 
                alert(" '.$msg.' ");
             </script>';
}*/

if(isset($_POST['submit'])){
        $checkusername = $_POST['username'];
        $checkpassword = $_POST['password'];

        //Query for retrieving username and password

        $sql = "SELECT Email,Password FROM users WHERE FirstName ='$checkusername' AND Password='$checkpassword'";
        
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){
                /*alertMsg("Login Success!!");*/
                header('location:mainPage.php');                
                
        }else{
               /*alertMsg("Invalid Login!! Please try again.");*/
               echo "Try again!";
        }

       
       
       
       
       

}

?>