<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
    
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];

        // encoding password
        $hidden_pass=md5($pass);
        
        ///tries to communicate with the database and store the data
        include '../database.php';

            //database code execute, default : warning generate
           $sql_login_info="SELECT * From user_information WHERE email='$mail'and  password='$hidden_pass'";
            
            $returnobj=$conn->query($sql_login_info);
            if($returnobj->rowCount()==1){
                
                //login successful
                session_start();
                $user_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($user_info as $user_profile)
                {
                    $_SESSION['u_id']=$user_profile['User_id'];
                    $_SESSION['u_name']=$user_profile['Name'];
                    $_SESSION['u_mail']=$user_profile['email'];

                }

                header('location:../home.php?signup=successful');
                
            }
            else{
                header('location: login.html?signup=unsuccessful1');
            }
   
 }
     else{
         //otherwise
         header('location: login.html?signup=unsuccessful');
     }

 ?>