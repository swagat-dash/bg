<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)

{

header("location: http://www.bgtechno.in");

}

 ?>﻿
<?php
require 'config.php';
$t_id=$_SESSION["t_id"];
$fullname=$_SESSION["fname"].$_SESSION["lname"];
$email=$_SESSION["email"];
$pay_method=mysqli_real_escape_string($ap,$_POST["payment"]);
$time=$_POST["time"];
$date=$_POST["date"]."time:".$time;
$wallet=$_SESSION["wallet"];
$type="distributor";
$ap3="INSERT INTO transactions(r_name,product,commission,t_date,t_status,t_id,email,product_id,promo_code,r_id,ptype,utype,wallet_recharge) VALUES('$fullname','$_SESSION[ptype]','$_SESSION[commission]','$date','pending','$t_id','$_SESSION[email]','$_SESSION[pid]','$_SESSION[promo_code]','$_SESSION[refrallcode]','$pay_method','$type','$wallet')";
$ap4=mysqli_query($ap,$ap3);
if(!$ap4)
{

die(mysqli_error($ap));
}
mysqli_close($ap);


$uploaddir = 'scr_shots/';
$n=1;
$uploadfile = $uploaddir.$_SESSION["t_id"].".jpg";
$ok=1;
$maxsize=5*1024*1024;

if($_FILES["file"]["size"] > $maxsize )

{

  echo "upload file under 5 MB ";

$ok=0;  
}
/*
if($_FILES[$_FILES["fig".$i]]["type"]!=="image/jpg" || $_FILES[$_FILES["fig".$i]]["type"]!=="image/jpeg" || $_FILES[$_FILES["fig".$i]]["type"]!=="image/png")

{

echo " plz upload file of type jpg,png or jpeg";
$ok=0;

}
*/
if($ok==0)

{

echo " error";
}
else
{



if (move_uploaded_file($_FILES["file"]['tmp_name'],$uploadfile)) 
{
    echo "File is valid, and was successfully uploaded.\n";
    
} 

}
echo "Transaction request submitted successfully<br>";
echo '<a href="http://www.bgtechno.in/distributor"> click here to go to dashboard </a>';
?>
