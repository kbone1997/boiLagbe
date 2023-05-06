<?php
session_start();

$book_id=$_GET['b_id'];
$book_user_id=$_GET['b_u_id'];
$user_id= $_SESSION['u_id'];
$t=time();

include '../database.php';

if($book_user_id!=$user_id){
    $sql_notification_info="INSERT INTO notification(n_info,u_id,from_user,book1_id,time,n_type)
    VALUES(' wants to exchange books with you','$book_user_id','$user_id','$book_id','$t','exchange') ";
    
    $conn->exec($sql_notification_info);
   
}
header('location:..//home.php?request=successful1');
?>
