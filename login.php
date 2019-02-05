
<?php
$email=$_POST['username'];
$pass=$_POST['password'];
$ap=mysqli_connect("sql310.epizy.com","epiz_23125428","JYuDJZ1qbAqqlK","epiz_23125428_anu");


    if(!$ap)
        {
            die("connection failed:".mysqli_error());
        }

$ap5=mysqli_query($ap,"SELECT email,fname,pass,refrallcode FROM distributors WHERE email='$email'");
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
                    $_SESSION["admin"]= true;
                    $_SESSION["email"]= $ap6["email"];
                    $_SESSION["fname"]=$ap6["fname"];
                    $_SESSION["refrallcode"]=$ap6["refrallcode"];
                    header("location: http://www.rmdtechnologies.in/distributor.php");
                 }
            else
                {
                     echo "the username or password is incorrect";
                 }
          }
}
mysqli_close($ap);

?>
