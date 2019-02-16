
<?php
$email=$_POST['username'];
$pass=$_POST['password'];
require 'config.php';

$ap5=mysqli_query($ap,"SELECT email,phn,fname,lname,pass,refrallcode FROM distributors WHERE email='$email'");
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
            //$hashpass=password_hash($pass,PASSWORD_DEFAULT);
            
            $ap6=mysqli_fetch_assoc($ap5);
               if(password_verify($pass,$ap6["pass"]))
               {
                    session_start();
                    $_SESSION["login"]= true;
                    $_SESSION["email"]= $ap6["email"];
                    $_SESSION["fname"]=$ap6["fname"];
                    $_SESSION["refrallcode"]=$ap6["refrallcode"];
                    $_SESSION["phn"]=$ap6["phn"];
                    $_SESSION["lname"]=$ap6["lname"];
                    echo ' login successful<br>
       <a href="index.php"> click here to go to dashboard</a>';
                 }
            else
                {
                     echo "the username or password is incorrect";
                 }
          }
}

mysqli_close($ap);

?>
