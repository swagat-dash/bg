<?php

session_start();
if(isset($_SESSION["login_admin"]) || $_SESSION["login_admin"]==true)

{

header("location: http://www.bgtechno.in/distributor/dashboard.php");

}

 ?>﻿
<?php
$email=$_POST['username'];
$pass=$_POST['password'];
require 'config.php';

$ap5=mysqli_query($ap,"SELECT email,phn,fname,pass,refrallcode FROM admin WHERE email='$email'");
if(!$ap5)
{

echo "connection failed";

}
else
{
    if(mysqli_num_rows($ap5)==0)
        { 
          echo "user does not exist: please signup first";
        }
    else
        {
            $hashpass=password_hash($pass,PASSWORD_DEFAULT);
            
            $ap6=mysqli_fetch_assoc($ap5);
               if(password_verify($ap6["pass"],$hashpass))
               {
                    session_start();
                    $_SESSION["login_admin"]= true;
                    $_SESSION["email"]= $ap6["email"];
                    $_SESSION["fname"]=$ap6["fname"];
                    $_SESSION["refrallcode"]=$ap6["refrallcode"];
                    $_SESSION["phn"]=$ap6["phn"];
                    header("location: http://www.bgtechno.in/rahul");
                 }
            else
                {
                     echo "the username or password is incorrect";
                 }
          }
}
mysqli_close($ap);

?>
