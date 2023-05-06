
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="../style/home.css">
    <link href="home_body.php">
</head>


</style>
<body>
    <header class="header">
        <div class="logo_name">
            <img src="../boi_lagbe_image/logo2.png" height="70px" width="40px">
            <h2 class="name">বই লাগবে ?</h2>
        </div>

        <div class="btn" >
            <div class="ui animated button" tabindex="0" id="btn_type_home">
                <div class="visible content" id="vs_con">Home</div>
                <div class="hidden content">
                  <i class="home icon"></i>
                </div>
              </div>

              

              <div class="ui animated fade button" tabindex="0" id="btn_type_signup">
                <div class="visible content">Sign-up / Log in</div>
                <div class="hidden content">
                  <i class="handshake outline icon"></i>
                </div>
              </div>
        </div>

    </header>


  <main>
  <div class="subtitle">
        <div class="ui vertical animated button" tabindex="0" id="btn_type_book_upload">
                <div class="visible content" id="vs_con">
                   Book upload
                </div>
                <div class="hidden content">
                <i class="upload icon"></i>
                </div>
              </div>

              <a href="../share/share.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_share">
                <div class="visible content" id="vs_con">
                   Book Share
                </div>
                <div class="hidden content">
                <i class="handshake outline icon"></i>
                </div>
              </div></a>

              <a href="../exchange/exchange.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_exchange">
                <div class="visible content" id="vs_con">
                   Book Exchange
                </div>
                <div class="hidden content">
                <i class="american sign language interpreting icon"></i>
                </div>
              </div></a>

              <a href="../rent/rent.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_rent">
                <div class="visible content" id="vs_con">
                   Book Rent
                </div>
                <div class="hidden content">
                <i class="handshake icon"></i>
                </div>
              </div></a>

              <a href="../sell/sell.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_sell">
                <div class="visible content" id="vs_con">
                   Buy a Book
                </div>
                <div class="hidden content">
                <i class="shopping bag icon"></i>
                </div>
              </div></a>
              
              <a href="../donate/donate.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_donate">
                <div class="visible content" id="vs_con">
                   Book Donation
                </div>
                <div class="hidden content">
                  <i class="address book outline icon"></i>
                </div>
              </div></a>


              <a href="../gift/gift.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_exchange">
                <div class="visible content" id="vs_con">
                   Gift a Book
                </div>
                <div class="hidden content">
                <i class="gift icon"></i>
                </div>
              </div></a>

              <a href="../forum/forum.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_forum">
                <div class="visible content" id="vs_con">
                   Forum
                </div>
                <div class="hidden content">
                  <i class="edit icon"></i>
                </div>
              </div></a>

              <a href="../notification/show_notification.php"><div class="ui vertical animated button" tabindex="0" id="btn_type_notification">
                <div class="visible content" id="vs_con">
                  Notification
                </div>
                <div class="hidden content">
                  <i class="bell icon"></i>
                </div>
              </div></a>

        </div>
  </main>


   <script>

        document.getElementById("btn_type_home").onclick = function () {
            location.href = "../home.php";
    };
    document.getElementById("btn_type_book_upload").onclick = function () {
            location.href = "../book_upload/upload_book.php";
    };
        document.getElementById("btn_type_donate").onclick = function () {
            location.href = "../donate/donate.php";
    };   
        document.getElementById("btn_type_forum").onclick = function () {
            location.href = "./forum.php";
    }; 
   
        document.getElementById("btn_type_signup").onclick = function () {
             location.href = "Sign up/sign_up.html";
    };  
    
    document.getElementById("btn_type_rent").onclick = function () {
             location.href = "Sign up/sign_up.html";
    }; 
   </script>
</body>
</html>