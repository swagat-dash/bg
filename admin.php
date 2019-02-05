<?php
session_start();

if(!isset($_SESSION["admin"]) || $_SESSION["admin"]!==true)
{

header("location: http://www.rmdtechnologies.in");

}



else
{

$ap=mysqli_connect("sql310.epizy.com","epiz_23125428","JYuDJZ1qbAqqlK","epiz_23125428_anu");


    if(!$ap)
        {
            die("connection failed:".mysqli_error());
        }


$ap5=mysqli_query($ap,"SELECT fname,lname,email,phn FROM retailers");

if(!$ap5)

{
    echo "error";
}

else
{

    if(mysqli_num_rows($ap5)>0)
{
        
    while($anu=mysqli_fetch_assoc($ap5))
      {
            echo "fname".$anu["fname"]."lname".$anu["lname"]."email".$anu["email"]."phn".$anu["phn"]."<br>";
       }
}

    else
         {


             echo "no retailers found";


            }
}

}
mysqli_close($ap);

?>
