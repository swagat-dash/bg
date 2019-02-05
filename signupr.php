

<?php
session_start();
if(!isset($_SESSION["register"]) || $_SESSION["register"]!==true)
{
   header("location: http://www.rmdtechnologies.in");
}



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['password'];
$gender=$_POST['gender'];
$phn=$_POST['phone'];
$ans=$_POST['answer'];
$email=$_POST['email'];
$refrallcode=$_SESSION["refrallcode"];
$ap=mysqli_connect("sql310.epizy.com","epiz_23125428","JYuDJZ1qbAqqlK","epiz_23125428_anu");


    if(!$ap)
        {
            die("connection failed:".mysqli_error());
        }


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

                         $ap2="INSERT INTO retailers (fname,lname,email,phn,pass,sans,refrallcode) VALUES('$fname','$lname','$email','$phn','$pass','$ans','$refrallcode')";


                         $ap3=mysqli_query($ap,$ap2);
                         if(!$ap3)
        
                             {
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



