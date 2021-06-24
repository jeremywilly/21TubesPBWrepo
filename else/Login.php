<?php

require "mysqlDB.php";
session_start();
include_once('db_connect.php');
$database = new database();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($database->login($username, $password)) {
    header('location:Home.php');
  }
}

if (isset($_POST['register'])) {
  $username = $_POST['uname'];
  $password = $_POST['psw'];
  $email = $_POST['mail'];
  $location = $_POST['loc'];
  $no = $_POST['Contact'];
  $birthdate = $_POST['birthday'];
  $Degree = $_POST['degree'];
  $University = $_POST['university'];
  $Bio = $_POST['bio'];
  if ($database->register($username, $password, $email, $location, $no, $birthdate ,$Degree ,$University ,$Bio)) {
    header('location:Login.php');
  }
}
?>
<!DOCTYPE html>

<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/style.css">
<script src="lib/Login.js"></script>
<style>
  @font-face {
    font-family: Poppins-Bold;
    src: url("fonts/Poppins-Bold.ttf");
  }

  .HomeWallpaper {
    position: relative;
    text-align: center;
    color: black;
    height: 500px;
    background-image: url("images/Home.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-family: Poppins-Bold;
  }
</style>

<body>

  <!-- Navbar -->
  <div class="top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
    </div>
  </div>

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">JOB</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">POST A JOB</a>
  </div>

  <!--Home Wallpaper-->
  <div class="HomeWallpaper">
    <div id="log">
      <br>
      <h1>SIGN IN</h1>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
    </div>
  </div>

  <!--Login Button-->
  <div>
    <div id="id01" class="modal">

      <form class="modal-content animate" method="post" action="">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="submit" name="login">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>

        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
  </div>

  <!--Register Button-->
  <div>
    <div id="id02" class="modal">

      <form class="modal-content animate" method="post" action="">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="Email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="mail" required>

          <label for="Location"><b>Location</b></label>
          <input type="text" placeholder="Location" name="loc" required>

          <label for="Contact Number"><b>Contact Number</b></label>
          <input type="text" placeholder="Number" name="Contact" required>

          <label for="birthday">Birthday:</label>
          <input type="date" id="birthday" name="birthday">
          <br>

          <label for="degree">Degree</label>
          <input type="text" id="degree" name="degree">

          <label for="university">University:</label>
          <input type="text" id="university" name="university">
          
          <label for="bio">Bio</label>
          <input type="text" id="bio" name="bio">

          <button type="submit" name="register">Register</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </div>

  <div class="w3-container w3- white">
  </div>
  <div class="w3-display-container  w3-black " style="height:35rem;">

    <h2 class="w3-wide w3-center">With Us Job Finder</h2>

    <pre class="w3-opacity w3-center"><i>
      Let the right people know you’re open to work
      With the Open To Work feature, 
      you can privately tell recruiters 
      or publicly share with the LinkedIn 
      community that youre looking 
      for new job opportunities
      </i><pre><br>
      
   </div>    


<script>

</script>

</body>