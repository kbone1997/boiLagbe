<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sell</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="sell.css">

</head>
<body>
  <?php
     include '../header.php'
  ?>




   <div class="up_title">
              <p><u>Book For Sell</u></p>
           </div>

      <main class="main">
           
            <?php
            include '../database.php';
            $sql_book_information="SELECT * 
            FROM `book_info` 
            WHERE Type='sell'";
           
                $returnobj=$conn->query($sql_book_information);
                $book_info=$returnobj->fetchAll();
        
                foreach ($book_info as $book)
                {   
                  if($book['available']==1){
                  echo"                    
                    <div class='card'>
                  <div class='image'>
                  <img src='../boi_lagbe_image/$book[Book_image]'>
                   </div>
               <div class='title'>
                <h1>$book[Book_name]</h1>
                <h3>Book Type: $book[Book_type] </h3>
               </div>
               <div class='des'>
                <p>$book[Book_description]</p>
                   <a href='sell_form.php?b_id=$book[book_id]'><button>Buy the Book</button></a>
               </div>
               </div>
                  ";
                }

                  else{
                    echo"
                    <div class='card'>
                  <div class='image'>
                  <img src='../boi_lagbe_image/$book[Book_image]'>
               </div>
               <div class='title'>
                <h1>$book[Book_name]</h1>
                <h3>Book Type: $book[Book_type] </h3>
               </div>
               <div class='des'>
                <p>$book[Book_description]</p>
               <button disabled>Sold</button>
               </div>
               </div>
                
                  " ;}
                }

                
     

    ?>
        </main>
       <script>

           document.getElementById("btn_type1").onclick = function () {
               location.href = "index.html";
       };
       document.getElementById("btn_type2").onclick = function () {
          location.href = "sign_up.html";
       };   
      </script>    
</body>
</html>
