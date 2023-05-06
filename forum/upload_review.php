
<?php

session_start();
$user_id= $_SESSION['u_id'];


if($_SERVER['REQUEST_METHOD']=="POST"){
   
        $name=$_POST['name'];
        $des=$_POST['des'];

        
       include '../database.php';
      
        $sql_review_info="INSERT INTO forum(user_id,book_name,description) VALUES ('$user_id','$name','$des')";


           $conn->exec($sql_review_info);

           header('location:forum.php?upload=successful1');

     }

else{

    
    header('location:../home.php?upload=Failed');
}
