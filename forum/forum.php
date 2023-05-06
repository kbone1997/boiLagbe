

 <?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum.css">
    <title>Book Review</title>
</head>
<body>

<?php
     include '../header.php'
//   ?>
 
<hr>
<h1 class="title1">Book Review</h1>
<?php
     
 
            include '../database.php';
            $sql_forum_information="SELECT * 
            FROM `forum` ";
           
                $returnobj=$conn->query($sql_forum_information);
                $forum_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($forum_info as $forum)
                {   
                  if(is_null($forum['description'])){
                  echo"                    
                    <h1>No Review Exists</h1>
                  ";
                }

                  else{
                    echo"
                    <div class='card'>
               <div class='title'>
                <h1>$forum[book_name]</h1>
               </div>
               <div class='des'>
                <p>$forum[description]</p>
               </div>
               </div>
                
                  " ;}
                }
?>

<a href="review.php"><h2>Write a Review</h2></a>
</body>
</html>


