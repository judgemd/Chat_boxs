<!--<?php //include('../system/connection.php');
//if(isset($_POST['sendmessage'])) {
//  $text = $_POST["text"];
//  $username = $_SESSION["username"];
//
//  mysqli_query($conn, "INSERT INTO messages(username, text) VALUES('$text','$username')");
//  }

 ?> -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/style.css">
     <script src="https://kit.fontawesome.com/cca197e807.js" crossorigin="anonymous"></script>
 </head>
 <body>

     <div class="chat">

         <div class="sidebar">
             <div class="search">
                 <input type = "text" placeholder="Ara..">
                 <i class="fas fa-search"></i>
             </div>
             <div class="contacts">
                 <ul>
                   <li>
                       <a href = "#">
                       <img src = "../images/ashraf.JPG">
                       <div class="contact">
                           <div class="name">Global Chat</div>
                           <div class="message">Hi, This is a test message</div>
                       </div>
                       <div class="notification"></div>
                   </a>
                   </li>
                 </ul>
             </div>
         </div>

         <div class="content">

             <div class="message-header">
                 <div class="user-info">
                     <img src = "../images/ashraf.JPG">
                     <div class="user">
                         <div class="name">Global Chat</div>
                         <div class="time">X minute ago</div>
                     </div>
                 </div>
                 <div class="actions">
                     <ul>
                         <li>
                             <a href = "#"><i class="fa fa-info-circle"></i></a>
                         </li>
                         <li>
                             <a href = "#"><i class="fa fa-ellipsis-v"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="message-content">

               <?php


               ?>
<!--
               <div class="message">
                   <div class="user_name">judgemd</div>
                   <div class="bubble">Hi, What's up?</div>
                   <div class="time">1 minute ago</div>
               </div>
               <div class="message me">
                   <div class="bubble">Hi, What's up?</div>
                   <div class="time">1 minute ago</div>
               </div>
             -->
             </div>
             <div class="message-form">
                 <ul>
                     <li class = "emoji">
                         <a href = "#"><i class = "fa fa-laugh"></i></a>
                     </li>
                     <li class="input">
                       <form action="../system/connection.php" method="post" id="login">
                         <input type = "text" name="text" placeholder="Please Type Something...">
                       </form>
                     </li>
                     <li class = "micr">
                         <a href="#"><i class = "fa fa-microphone"></i></a>
                     </li>
                     <li class = "telegram">
                         <button name="sendmessage" form="login"><i class="fab fa-telegram-plane"></i></button>
                     </li>
                 </ul>
             </div>

         </div>

     </div>

 </body>
 </html>
