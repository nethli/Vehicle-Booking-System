<?php

include '../PHP/server.php' ;

if(isset($_POST['submit'])){
        $email      = $_POST['username'];
        $password   = $_POST['password'];

        //Email Retrieval
        $sql_select = ("SELECT * From users");
                            
        $result     = mysqli_query($con,$sql_select);
                            
        if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)) {
                        $checkEmail = $row['Email'];
                        if ($email==$checkEmail) {
                                echo "You can forward";
                        }
                        
                        //echo $row['Email']."<br>";
                        else {
                                header('homepage.html');
                        }
                }
        }else{
                //echo "Error !";
        }
                                                       
}                 
?>
                
                

                
                                
                
                
                
                
                
                
                






