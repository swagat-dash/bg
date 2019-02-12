<?php

session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)

{

header("location: http://www.bgtechno.in");

}

 ?>﻿
<?php
$code=$_GET["code"];
$_SESSION["promo_code"]=$code;
require 'config.php';
$ap1="SELECT * FROM promo_list WHERE p_code ='$code'";
$ap2=mysqli_query($ap,$ap1);
if(!$ap2)
{

die(mysqli_error($ap));
}
if(mysqli_num_rows($ap2)!==0)
{
$ap3=mysqli_fetch_assoc($ap2);
$price=$_SESSION["tmp_price"]-($_SESSION["tmp_price"]*($ap3["discount"]/100));
$_SESSION["tmp_price"]=$price;
echo $price;
}

else
{
$_SESSION["promo_code"]="NO";

echo $_SESSION["tmp_price"];




}






