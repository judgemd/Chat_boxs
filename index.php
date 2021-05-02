<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="template/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
      <input type="checkbox" id="show">
      <label for="show" class="show-btn" onclick="show()">Welcome</label>

      <!-- Container 2-->
      <div class="container2" id="containerid2">
        <label for="show" class="close-btn2 fas fa-times" title="close" onclick="closebtn()"></label>
        <div class="text2">Register Form</div>
      <form action="#">
    <div class="data2">
            <label>Nick Name</label>
            <input type="text" required>
    </div>
    <div class="data2">
            <label>Password</label>
            <input type="password" required>
    </div>
    <div class="btn2">
        <div class="inner2"></div>
        <button type="submit">Register</button>
    </div>
    </form>
  </div>

  <!-- Container 1-->
      <div class="container" id='containerid'>
        <label for="show" class="close-btn fas fa-times" title="close" onclick="closebtn()"></label>
        <div class="text">Login Form</div>
      <form action="#">
          <div class="data">
            <label>Nick Name</label>
            <input type="text" required>
          </div>
    <div class="data">
            <label>Password</label>
            <input type="password" required>
    </div>
    <div class="forgot-pass">
        <a href="#">Forgot Password?</a>
    </div>
    <div class="btn">
        <div class="inner"></div>
        <button type="submit">login</button>
    </div>
    <div class="signup-link">Not a member?<a onclick="register()" id="reg">Register</a></div>
    </form>
    </div>

    </div>
    <script src="template/index.js"></script>

  </body>
