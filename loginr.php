<?php
session_start();
if(isset($_SESSION["login_retailer"]) || $_SESSION["login_retailer"]==true)

{

header("location: http://www.bgtechno.in/retailer");

}
require 'config.php';
?>﻿
<?php
$email=$_POST['email'];
$pass=$_POST['password'];
$ap5=mysqli_query($ap,"SELECT email,phn,fname,lname,pass,refrallcode,r_id FROM retailers WHERE email='$email'");
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
                   
                    $_SESSION["login_retailer"]= true;
                    $_SESSION["email"]= $ap6["email"];
                    $_SESSION["fname"]=$ap6["fname"];
                    $_SESSION["phn"]=$ap6["phn"];
                    $_SESSION["lname"]=$ap6["lname"];
                    $_SESSION["r_id"]=$ap6["r_id"];
                   echo ' <script> location.replace("http://www.bgtechno.in/retailer"); </script> ';

                 }
            else
                {
                     echo "the username or password is incorrect";
                 }
          }
}
mysqli_close($ap);

print_r(error_get_last());
?>
