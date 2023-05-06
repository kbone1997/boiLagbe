<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book_upload.css">
    <title>Book Upload</title>
</head>
<body>
 
<?php
 include '../header.php'
?>

<div class="card">
<form  action="upload.php" method="POST" enctype="multipart/form-data" class="card-form"> 
            <div class="card-image">	
			<h2 class="card-heading">
				Upload Book
				<p><small class="small">What do you want to do with this lovely book?</small></p>
			</h2>
		   </div>

             <div class="input-group">
                   <input type="text" id="name" name="name" required>
                    <label for="name"><i class="fas fa-user"></i> Book Name</label>
                   
            </div>

            <div class="input-group">
                <input type="text" id="des" name="des" required> 
                <label for="des"><i class="fas fa-envelope"></i>Description</label>    
            </div>

            <div class="input-group">
                <input type="book_type" id="book_type" name="book_type" required>
                <label for="book_type"><i class="fa fa-key" aria-hidden="true"></i> Book category</label>  
            </div>

            <div class="input-group">
               <input type="type" id="type" name="type" required>
                <label for="type"><i class="fa fa-key" aria-hidden="true"></i>For which purpose?</label>
            </div>

            <div class="input-group">
               <input type="number" id="price" name="price" required>
               <label for="price"><i class="fas fa-user"></i> Price</label>
           </div>


             <div class="input-group">
                <input type="file" id="image" name="image" required  class="pic">
                <label for="image"><i class="fa fa-key" aria-hidden="true" ></i>Upload a Picture</label>
            </div> 
            
            <button type="submit" class="action-button"><i class="fas fa-paper-plane"></i>Upload</button>
            <div class="card-info">
			<p>By connecting with us, you are agreeing to our Terms and Conditions</a></p>
		    </div>
            </div>
</body>
</html>
