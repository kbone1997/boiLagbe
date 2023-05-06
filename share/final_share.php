<?php
session_start();

   $book_id=$_GET['id'];

   $address=$_POST['address'];

   $r_date=$_POST['rent_date'];

   $ret_date=$_POST['return_date'];
   
   $user_id= $_SESSION['u_id'];



   include '../database.php';

          $sql_user_info="SELECT user_id 
          FROM `book_info` 
          WHERE book_id='$book_id'";


          $returnobj=$conn->query($sql_user_info);
          $user_information=$returnobj->fetchAll();

          foreach ($user_information as $user){
               $userrrr_id=$user['user_id'];
          }

          $sql_delivery_info="INSERT INTO delivery(user1,user2,address) VALUES ('$userrrr_id','$user_id','$address')";
          $conn->exec($sql_delivery_info);



           $sql_book_info="UPDATE book_info
           SET available=0
           WHERE book_id='$book_id'";
           
           $conn->exec($sql_book_info);


           $sql_share_info="INSERT INTO book_share(user_id,user2,book_id,share_date,return_date) 
                           VALUES ('$user_id','$userrrr_id','$book_id','$r_date','$ret_date')";


            $conn->exec($sql_share_info);

            header('location:..//home.php?buying=successful1')
?>
