<?php session_start(); ?>

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
                  <?php
                  for ($i=0; $i < 18; $i++) {
                    include('./textOOP.php');
                  }
                  ?>
                </ul>
            </div>
        </div>

        <div class="content">

            <div class="message-header">
                <div class="user-info">
                    <img src = "images/ashraf.JPG">
                    <div class="user">
                        <div class="name">Ashraf Mammadov</div>
                        <div class="time">10 dk once</div>
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
                for ($i=0; $i < 13; $i++) {
                  if($i %2 == 0) {
                  include('./chatOOP.php');
                } else {
                  include('./chatOOP2.php');
                }
                }
                 ?>
            </div>
            <div class="message-form">
                <ul>
                    <li class = "emoji">
                        <a href = "#"><i class = "fa fa-laugh"></i></a>
                    </li>
                    <li class="input">
                        <input type = "text" placeholder="Bir seyler yaz..">
                    </li>
                    <li class = "micr">
                        <a href="#"><i class = "fa fa-microphone"></i></a>
                    </li>
                    <li class = "image">
                        <a href="#"><i class = "fa fa-image"></i></a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</body>
</html>
