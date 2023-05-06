<?php

session_start();
$user_id= $_SESSION['u_id'];


if($_SERVER['REQUEST_METHOD']=="POST"){
   
         
         //storing value to variables
        $name=$_POST['name'];
        $des=$_POST['des'];
        $book_type=$_POST['book_type'];
        $type=$_POST['type'];
        $price=$_POST['price'];
//upload file

$receive_file=$_FILES['image'];

$fileName=$receive_file['name'];
$temp_file_path=$receive_file['tmp_name'];
$to="../boi_lagbe_image/$fileName";



///----------------------------------------

        
       include '../database.php';
      
        $sql_user_info="INSERT INTO book_info(Book_name,Book_description,Book_type,Type, price, Book_image, user_id, available) VALUES ('$name','$des',' $book_type','$type','$price','$fileName','$user_id',1)";


        move_uploaded_file($temp_file_path,$to);


           $conn->exec($sql_user_info);

           if($type=='share' || $type=='donate' || $type='exchange'){
              $sql_reward="UPDATE user_information
              SET reward=reward+1
              WHERE User_id='$user_id'";

             $conn->exec($sql_reward);
           }

          

           header('location:..//home.php?upload=Sucessful');
         

        //    $conn->exec($sql_donate);

     }

else{
    //we won't provide service
    
    header('location:..//home.php?upload=Failed');
}

