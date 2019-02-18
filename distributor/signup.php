<?php

session_start();
if(isset($_SESSION["login"]) || $_SESSION["login"]==true)

{

header("location: http://www.bgtechno.in/distributor");

}

 ?>﻿

<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass_raw=$_POST['password'];
$gender=$_POST['gender'];
$phn=$_POST['phone'];
$ans=$_POST['answer'];
$email=$_POST['email'];
$pass=password_hash($pass_raw,PASSWORD_DEFAULT);
require 'config.php';

$ap5=mysqli_query($ap,"SELECT email FROM userlist WHERE email='$email'");
    if(mysqli_num_rows($ap5)==0)
        { 
        
         
        
/*    if(mysqli_num_rows($ap5)>0)
        {
            $ap6=mysqli_fetch_assoc($ap5);
        

            if($ap6["email"]==$email)
                {
                    echo " user already exists ";
                   mysqli_close($ap);
                 }
          
*/

                         $ap2="INSERT INTO distributors (fname,lname,email,phn,pass) VALUES('$fname','$lname','$email','$phn','$pass')";


                         $ap3=mysqli_query($ap,$ap2);
                         if(!$ap3)
        
                             {
                                 die(mysqli_error($ap));
                                 echo "registrationfailed:user already exists";
                             }

                         else
                                {
                                    echo "registration successfull";
                                    mysqli_close($ap);
                                 } 
                    

            }
    else
         {
              echo "user already exists";
          }
                               
?>



