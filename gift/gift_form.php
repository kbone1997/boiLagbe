<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gift</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <!-- <link rel="stylesheet" href="gift_form.css"> -->
  <link rel="stylesheet" href="../all_form.css">

</head>

<body>

<?php
     include '../header.php'
  ?>
  <main class="main">
  <?php

   $book_id=$_GET['b_id'];

 echo"
 <form method='POST' action='final_gift.php?id=$book_id'>
 <div class='login-box'>
   <h1>Gift The Book</h1>
  
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

   <div class='textbox'>
   <div> <i class='gift icon'></i>Gift </div>
   
   
   
   <div class='first_check' >
            <div class='ui checkbox'>
            <input type='checkbox' name='note' id='myCheck' onclick='myFunction()' >
            <label>Write a special note</label>
            </div>
    </div>

    <div>
    <div class='textbox', id='note' style='display:none'>
    <i class='write icon'></i>
      <input type='text' placeholder='Write a Note' name='note_text'>
    </div>
    </div>

    <div>
            <div class='ui checkbox'>
            <input type='checkbox' name='card'>
            <label>Gift Card</label>
            </div>
        
   </div>
   
   <div>
   <div class='ui checkbox'>
   <input type='checkbox' name='wrap'>
   <label>Wrapping</label>
   </div>

   </div>

   <input type='submit' class='submit_button' value='Gift'>
 
   </div>
 </form>
 ";
?>
  </main>

<script>
    function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("note");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    
    text.style.display = "none";
  }
    }
</script>  

</body>
</html>