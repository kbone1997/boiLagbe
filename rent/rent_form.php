<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rent</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="rent_form.css">

</head>

<body>

<?php
     include '../header.php'
  ?>
  <!-- <div class="main"> -->
  <?php

   $book_id=$_GET['b_id'];

 echo"
 <form method='POST' action='final_rent.php?id=$book_id'>
 
 <div class='login-box'>
   
 <h1>Get any Book on Rent</h1>
  
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
     <input type='date' placeholder='Rent Date' name='rent_date'>
   </div>

   <div class='textbox'>
   <i class='calendar alternate icon'></i>
     <input type='date' placeholder='Return Date' name='return_date'>
   </div>

   <div class='textbox'>
   <i class='calendar icon'></i>
     <input type='text' placeholder='Total Day' name='total_date'>
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

   <input type='submit' class='submit_button' value='Rent'>
 
   </div>
 </form>
 ";
?>
  <!-- </div> -->
</body>
</html>