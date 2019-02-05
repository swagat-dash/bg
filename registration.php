

<!DOCTYPE html>
<html>
<head>
    <title>Login or Register | RMD Technologies</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">	
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="validate.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container register">
 
                <div class="row">

                    <div class="col-md-3 register-left">
                        <a href="index.html"><button class="btnRegister" style="float: left; width: 100%">Back to Home</button></a>

                        <img src="img/logo/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                         <a href="login.html"><input type="submit" name="" value="Login"/></a>

                     </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="retailer.php" role="tab" aria-controls="home" aria-selected="false">Retailer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Distributor</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Distributor</h3>
                        <form action="<?php echo "signup.php";?>" method="POST" name="registration"> <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control firstname" name="fname" placeholder="First Name *" value="" required/>
                                            <span class="error-fname" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control lastname" name="lname" placeholder="Last Name *" value="" required/>
                                            <span class="error-lname" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control password" name="password" placeholder="Password *" value="" required />
                                            <span class="error-pass" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control confirmpassword" name="password2" placeholder="Confirm Password *" value="" required/>
                                            <span class="error-conpass" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control email" name="email" placeholder="Your Email *" value="" required/>
                                            <span class="error-email" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control phone" placeholder="Your Phone *" value="" required/>
                                            <span class="error-phone" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <div class="form-group">
                                            <select name="que" class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Security Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control referral" name="answer" placeholder="Enter Your Answer *" value="" required/>
                                            <span class="error-referral" style="color:red;font-weight:bold;"></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="distributor" onsubmit="validate()" value="Register"/>
                                    </div>
                                </div></form>
                            </div>
                           
                        
                        </div>
                    </div>
                </div>

            </div>

</body>
</html>
