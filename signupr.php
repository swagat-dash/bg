<?php
session_start();
$refrallcode=$_SESSION["refrallcode"];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['password'];
$gender=$_POST['gender'];
$phn=$_POST['phone'];
$email=$_POST['email'];
require 'config.php';
$ap5=mysqli_query($ap,"SELECT email FROM retailers WHERE email='$email'");
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

                         $ap2="INSERT INTO retailers (fname,lname,email,phn,pass,refrallcode) VALUES('$fname','$lname','$email','$phn','$pass','$refrallcode')";


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



