<?php
session_start();
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="notification.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
    }
</style> 

<body>
<div><?php
     include '../header.php'
?> </div>

<!-- <div> -->
    <section class="main">
        <div class="outer-notification menu-no-animation">
            <div class="head-notification">
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
                <p>Notification</p>
                <div class="search">
                    <i class="fas fa-search"></i>
                </div>
                <form class="search-bar no-animation">
                    <input type="text" name="Search" placeholder="Search...">
                </form>
            </div>
            <?php
             $user_id= $_SESSION['u_id'];

             include '../database.php';


             $sql_notification="SELECT from_user, n_info, time, n_type
             FROM  notification
             WHERE u_id='$user_id'";

            $returnobj=$conn->query($sql_notification);
            $no_info=$returnobj->fetchAll();
            foreach ($no_info as $info){

            $from_user=$info['from_user'];
            $sql_user="SELECT Name
            FROM user_information
            WHERE User_id='$from_user'";
            
            $returnobj=$conn->query($sql_user);
            $data= $returnobj->fetch();

            $u_name=$data['Name'];
            $type=$info['n_type'];

            if($type='exchange'){
                echo"           
                <a href='../exchange/exchange_done2.php?us_id=$from_user & '><div class='body-notification'>
               <div class='line'></div>
               <div class='post'>
                   <div class='circle'></div>
                   <span class='time'>$info[time]</span>
                   <p><b>$u_name</b> $info[n_info]</p>
               </div>
               </div></a>";
            }

            else{
                echo"           
                <div class='body-notification'>
               <div class='line'></div>
               <div class='post'>
                   <div class='circle'></div>
                   <span class='time'>$info[time]</span>
                   <p><b>$u_name</b> $info[n_info]</p>
               </div>
               </div>";
            }
           
            }
            ?>
           
        </div>
    </section>
    <!-- </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="notification.js"></script>
</body>