<?php
session_start();

   $book_id=$_GET['id'];

   $address=$_POST['address'];

   $r_date=$_POST['rent_date'];

   $ret_date=$_POST['return_date'];
   
   $user_id= $_SESSION['u_id'];

   $date=$_POST['total_date'];


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


          $sql_price="SELECT price
          FROM `book_info` 
          WHERE book_id='$book_id'";

         $returnobj=$conn->query($sql_price);

         $book_price=$returnobj->fetchAll();

         foreach ($book_price as $price){
            $b_price=$price['price'];
         }
            
          $total_bill=$b_price*$date;



           $sql_book_info="UPDATE book_info
           SET available=0
           WHERE book_id='$book_id'";
           
           $conn->exec($sql_book_info);


           $sql_rent_info="INSERT INTO book_rent(user_id,user2,book_id,rent,rent_date,Return_date) 
                           VALUES ('$user_id','$userrrr_id','$book_id','$total_bill','$r_date','$ret_date')";


            $conn->exec($sql_rent_info);



           $sql_user="UPDATE user_information
           SET balance=balance-'$total_bill'
           WHERE User_id='$user_id'";
          
           $conn->exec($sql_user);

           header('location:..//home.php?buying=successful1')

?>
