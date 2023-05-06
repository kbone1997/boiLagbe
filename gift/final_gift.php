<?php
session_start();

   $book_id=$_GET['id'];

   $address=$_POST['address'];

   $n=$_POST['note'];
   $n_text=$_POST['note_text'];
   $c=$_POST['card'];
   $w=$_POST['wrap'];


   if($n=='on'){
       $n=1;
   }
   else $n=0;

   if($c=='on'){
    $c=1;
    }
    else $c=0;

    if($w=='on'){
        $w=1;
    }
    else $w=0;

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

          $sql_delivery_info="INSERT INTO delivery(user1,address) VALUES ('$user_id','$address')";
          $conn->exec($sql_delivery_info);


          $sql_price="SELECT price
          FROM `book_info` 
          WHERE book_id='$book_id'";

         $returnobj=$conn->query($sql_price);

         $book_price=$returnobj->fetchAll();

         foreach ($book_price as $price){
            $b_price=$price['price'];
         }


           $sql_book_info="UPDATE book_info
           SET available=0
           WHERE book_id='$book_id'";
           
           $conn->exec($sql_book_info);


           $sql_user="UPDATE user_information
           SET balance=balance-'$b_price'
           WHERE User_id='$user_id'";
          
          $conn->exec($sql_user);

          
           

         $gift="INSERT INTO gift(user_id,book_id,note,note_text,card,wrap) VALUES ('$user_id','$book_id','$n','$n_text','$c','$w')";
         $conn->exec($gift);

         header('location:..//home.php?buying=successful1')

?>
