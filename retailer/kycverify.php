<?php
session_start();
if(!isset($_SESSION["login_retailer"]) || $_SESSION["login_retailer"]!==true)

{

header("location: http://www.bgtechno.in");

}

 ?>﻿
<?php
if(isset($_POST["personal"]))
{
require 'config.php';
$fullname=mysqli_real_escape_string($ap,$_POST["name"]);
$email=mysqli_real_escape_string($ap,$_POST["email"]);
$phn=mysqli_real_escape_string($ap,$_POST["phone"]);
$landmark=mysqli_real_escape_string($ap,$_POST["landmark"]);
$apartment=mysqli_real_escape_string($ap,$_POST["appartment"]);
$district=mysqli_real_escape_string($ap,$_POST["district"]);
$pincode=mysqli_real_escape_string($ap,$_POST["pincode"]);
$state=mysqli_real_escape_string($ap,$_POST["state"]);
$aadhar=mysqli_real_escape_string($ap,$_POST["aadhar"]);
$pan=mysqli_real_escape_string($ap,$_POST["pan"]);
$ap3="INSERT INTO kyc_retailer(name,email,phn,landmark,apartment,district,pincode,state,aadhar,pan) VALUES('$fullname','$email','$phn','$landmark','$apartment','$district','$pincode','$state','$aadhar','$pan')";
mysqli_query($ap,$ap3);
mysqli_close($ap);


$uploaddir = 'kyc/';
$n=1;
$uploadfile = $uploaddir.$_SESSION["r_id"].".jpg";
$ok=1;
$maxsize=5*1024*1024;

if($_FILES["kyc_doc"]["size"] > $maxsize )

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



if (move_uploaded_file($_FILES["kyc_doc"]['tmp_name'],$uploadfile)) 
{
    echo "File is valid, and was successfully uploaded.\n";
    
} 

}
echo "KYC request submitted successfully<br>";
echo '<a href="http://www.bgtechno.in/retailer"> click here to go to dashboard </a>';
}
if(isset($_POST["business"]))
{
require 'config.php';
$fullname=mysqli_real_escape_string($ap,$_POST["name"]);
$email=mysqli_real_escape_string($ap,$_POST["email"]);
$phn=mysqli_real_escape_string($ap,$_POST["phone"]);
$address2=mysqli_real_escape_string($ap,$_POST["com-address2"]);
$address=mysqli_real_escape_string($ap,$_POST["com-address"]);
$district=mysqli_real_escape_string($ap,$_POST["com-district"]);
$pincode=mysqli_real_escape_string($ap,$_POST["com-pincode"]);
$state=mysqli_real_escape_string($ap,$_POST["com-state"]);
$gstin=mysqli_real_escape_string($ap,$_POST["com-gstin"]);
$pan=mysqli_real_escape_string($ap,$_POST["com-pan"]);
$passport=mysqli_real_escape_string($ap,$_POST["com-passport"]);
$din=mysqli_real_escape_string($ap,$_POST["com-din"]);
$more=mysqli_real_escape_string($ap,$_POST["more"]);
$ap3="INSERT INTO kyc_retailer_bus(name,email,phn,add1,add2,district,pincode,state,gstin,pan,passport,dpin,more) VALUES('$fullname','$email','$phn','$address','$address2','$district','$pincode','$state','$gstin','$pan','$passport','$din','$more')";
mysqli_query($ap,$ap3);
mysqli_close($ap);


$uploaddir = 'kyc/';
$n=1;
$uploadfile = $uploaddir.$_SESSION["r_id"]."bus.jpg";
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
echo "KYC request submitted successfully<br>";
echo '<a href="http://www.bgtechno.in/retailer"> click here to go to dashboard </a>';
}

?>
