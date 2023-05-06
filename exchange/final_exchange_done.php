<?php
session_start();

$book_id=$_GET['b_id'];
$book_user_id=$_GET['b_u_id'];
$user_id2= $_SESSION['u_id'];
$t=time();

include '../database.php';


    $sql_notification_info="UPDATE notification
    SET book2_id='$book_id'
    WHERE n_id='$book_user_id' and from_user='$user_id2' ";
    
    $conn->exec($sql_notification_info);

    $sql_notification_info="UPDATE notification
    SET n_info='Exchange Successful'
    WHERE n_id='$book_user_id' and from_user='$user_id2' ";
    
    $conn->exec($sql_notification_info);


$sql_book1="UPDATE book_info
SET available=0
WHERE book_id='$book_id'";
$conn->exec($sql_book1);


$sql_b2="SELECT book1_id
FROM `notification` 
WHERE u_id='$user_id2' and from_user='$book_user_id'";
 $returnobj=$conn->query($sql_b2);
 $data= $returnobj->fetch();

 $book_id2=$data['book1_id'];
 


$sql_book2="UPDATE book_info
SET available=0
WHERE book_id='$book_id2'";
$conn->exec($sql_book2);

header('location:..//home.php?exchange=successful');
?>
