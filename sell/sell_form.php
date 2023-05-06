<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sell</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="sell_form.css">

</head>

<body>

<?php
     include '../header.php'
  ?>
  <!-- <div class="main"> -->
  <?php

   $book_id=$_GET['b_id'];

 echo"
 <form method='POST' action='final_buy.php?id=$book_id'>
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
   <i class='phone icon'></i>
     <input type='text' placeholder='Phone Number' name='number'>
   </div>

   <div class='textbox'>
   <i class='money bill alternate icon'></i>
     <input type='text' placeholder='Bank Account Number' name='number'>
   </div>

   <div class='textbox'>
   <i class='unlock icon'></i>
     <input type='text' placeholder='Pin Number' name='number'>
   </div>
   <div class='ui checkbox'>
  <input type='checkbox' name='reward'>
  <label>Use Reward</label>
  </div>

   <input type='submit' class='submit_button' value='Buy'>
 
   </div>
 </form>
 ";
?>
  <!-- </div> -->
</body>
</html>