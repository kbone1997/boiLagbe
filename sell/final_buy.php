<?php
session_start();

   $book_id=$_GET['id'];

   $address=$_POST['address'];

   $reward=$_POST['reward'];
   
   $user_id= $_SESSION['u_id'];

//    echo "this is a trial";
//    echo $user_id;

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

         // echo $b_price;

           $sql_book_info="UPDATE book_info
           SET available=0
           WHERE book_id='$book_id'";
           
           $conn->exec($sql_book_info);

           $sql_user1="SELECT reward
           FROM user_information 
           WHERE User_id ='$user_id'";
          
           $returnobj=$conn->query($sql_user1);
           $data= $returnobj->fetch();

            $r=$data['reward'];



           if($reward=='on' && $r>=$b_price){
            $sql_user="UPDATE user_information
            SET reward=reward-'$b_price'
            WHERE User_id='$user_id'";
            $conn->exec($sql_user);
           }
         else{
            $sql_user="UPDATE user_information
            SET balance=balance-'$b_price'
            WHERE User_id='$user_id'";
           
           $conn->exec($sql_user);
         }
          

          header('location:..//home.php?buying=successful1')

?>
