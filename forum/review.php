<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review</title>
</head>
<body>
 
<?php
 include '../header.php'
?>


<form  action="upload.php" method="POST" enctype="multipart/form-data"> 
            <h2> Write a Review</h2>

             <div class="input-group">
                    <label for="name"><i class="fas fa-user"></i> Book Name</label>
                    <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="des"><i class="fas fa-envelope"></i>Description</label>
                <input type="text" id="des" name="des" required> 
            </div>
            
            <button type="submit"><i class="fas fa-paper-plane"></i>Upload</button>


</body>
</html>