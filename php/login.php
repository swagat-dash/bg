<?php

$server = "sql310.epizy.com";
$username = "epiz_23125428";
$password = "JYuDJZ1qbAqqlK";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    echo "Failed to connect".mysql_error();
}
$user = $_POST['username'];
$pass = $_POST['password'];
$fuser = mysqli_real_escape_string($con,$user);

/* checking first in distributor */
mysqli_select_db($con,"epiz_23125428_informatics");
$sql = "SELECT * FROM distributor WHERE name = '$fuser'";
$result = mysqli_query($con,$sql);

if(!$result){
    echo "fail".mysqli_error();
}
else if(mysqli_num_rows($result)==0){

    /* checking secondly in retailer */
    $sql = "SELECT * FROM retailer WHERE name = '$fuser'";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "fail".mysqli_error();
    }
    else if(mysqli_num_rows($result)==0){
        echo "user doesn't exist";

    }
    else{
        $row = mysqli_fetch_assoc($result);
        $passver = $row["password"];

        $res = password_verify($pass,$passver);

        if(!$res){
            echo "password and username does not exist";
        }
        else{
         echo "login success";
        }
    }
}

$row = mysqli_fetch_assoc($result);
$passver = $row["password"];

$res = password_verify($pass,$passver);

if(!$res){
    echo "password and username does not exist";
}
else{
 echo "login success";
}

mysqli_close($con);