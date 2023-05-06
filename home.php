
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<style>
  .main{
      width: 100%;
      height: 75%;
      display: flex;
      flex-direction: row;
      align-items: center;
      background-image: url(../boi_lagbe_image/home_background5.jpeg); 
      background-size: cover;
      background-repeat: no-repeat;
      justify-content: center;
      padding: 1vw;
    }
</style>  

<body>
    <?php
     include 'header.php'
    ?>
    <main class="main">
        <form class="search_btn" action="book.php" method="POST">
          <button class="src_btn" type="submit"><i class="search icon"></i></button> 
          <input class="src" type="text" placeholder="Need a Book? " name="search_input">
        </form>     
</main>
</body>
</html>