<?php

session_start();
if(isset($_SESSION["login"]) || $_SESSION["login"]==true)

{

header("location: http://www.bgtechno.in/distributor/dashboard.php");

}

 ?>﻿
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Distributor Signup &amp; Login | BG Techno</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="../css/login.css">
</head>
<body>

  <div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#signup">Sign Up</a></li>
    <li class="tab"><a href="#login">Log In</a></li>
  </ul>

  <div class="tab-content">
    <div id="signup">
      <h1>Sign Up as Distributor</h1>

      <form action="signup.php" method="post">

        <div class="top-row">
          <div class="field-wrap">
            <label>
                First Name<span class="req">*</span>
              </label>
            <input type="text" name="fname" required pattern="^[A-z ]*$" title="Tip: First name cannot include numbers or symbols." />
          </div>

          <div class="field-wrap">
            <label>
                Last Name<span class="req">*</span>
              </label>
            <input type="text" name="lname" required pattern="^[A-z ]*$" title="Tip: Last name cannot include numbers or symbols." />
          </div>
        </div>

        <div class="field-wrap">
          <label>
              Email Address<span class="req">*</span>
            </label>
          <input type="email" name="email" required pattern="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" />
        </div>

        <div class="field-wrap">
          <label>
              Phone<span class="req">*</span>
            </label>
          <input type="phone" name="phone" required pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" />
        </div>

        <div class="field-wrap">
          <label>
              Set A Password<span class="req">*</span>
            </label>
          <input type="password" id="password" name="password" required autocomplete="off" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}$" title="Tip: Password should contain atleast one uppercase letter, one lowercase letter, one number, one symbol and should be 8 - 72 characters long." />
        </div>

        <div class="field-wrap">
          <label>
              Confirm Password<span class="req">*</span>
            </label>
          <input type="password" id="password2" name="password2" required autocomplete="off" title="Tip: Both the password must be same." />
        </div>

        <button type="submit" class="button button-block" />Get Started</button>

      </form>

    </div>

    <div id="login">
      <h1>Welcome Back!</h1>

      <form action="login.php" method="post">

        <div class="field-wrap">
          <label>
              Email Address<span class="req">*</span>
            </label>
          <input type="email" name="email" required pattern="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" /> <!-- name="username" in the old login.html -->
        </div>

        <div class="field-wrap">
          <label>
              Password<span class="req">*</span>
            </label>
           <input type="password" id="password" name="password" required autocomplete="off" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}$" />
        </div>

        <p class="forgot"><a href="../7hf633fsryt7bnct34573ncb4tv5q1.php">Forgot Password?</a></p>

        <button class="button button-block" />Log In</button>

      </form>

    </div>

  </div>
  <!-- tab-content -->

</div>
<!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/login.js"></script>
    <script src="../js/validate.js"></script>
</script>

</body>

</html>
