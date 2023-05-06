<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
   
         
         //storing value to variables
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        
       
    
        // encoding password
        $hidden_pass=md5($pass);
         
        ///tries to communicate with the database and store the data
        
            include '../database.php';
      
            //database code execute, default : warning generate
           $sql_user_info="INSERT INTO user_information(Name,email,password) VALUES('$name','$mail','$hidden_pass')";

            ///executing the mysql code
            // we used exec() as the database is not returning anything
           $conn->exec($sql_user_info);

           $u_id="SELECT User_id
           FROM `user_information` 
           WHERE email='$mail'";

          $returnobj=$conn->query($u_id);
          $user_info=$returnobj->fetchAll();


     }

else{
    //we won't provide service
    
    header('location: sign_up.html?signup=Failed');
}
