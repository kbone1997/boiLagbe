<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Share</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="share_form.css">

</head>

<body>

<?php
     include '../header.php'
  ?>
  <!-- <div class="main"> -->
  <?php

   $book_id=$_GET['b_id'];

 echo"
 <form method='POST' action='final_share.php?id=$book_id'>
 
 <div class='login-box'>
   
 <h1>Buy The Book</h1>
  
   <div class='textbox'>
   <i class='user icon'></i>
     <input type='text' placeholder='Name' name='user_name'>
   </div>
  
   <div class='textbox'>
   <i class='address book icon'></i>
     <input type='text' placeholder='Address' name='address'>
   </div>
  
   <div class='textbox'>
   <i class='calendar alternate icon'></i>
     <input type='date' placeholder='Rent Date' name='share_date'>
   </div>

   <div class='textbox'>
   <i class='calendar alternate icon'></i>
     <input type='date' placeholder='Return Date' name='return_date'>
   </div>


   <div class='textbox'>
   <i class='phone icon'></i>
     <input type='text' placeholder='Phone Number' name='number'>
   </div>

   <input type='submit' class='submit_button' value='Lend'>
 
   </div>
 </form>
 ";
?>
  <!-- </div> -->
</body>
</html>