<?php

$server = "sql310.epizy.com";
$username = "epiz_23125428";
$password = "JYuDJZ1qbAqqlK";
$con = mysql_connect($server,$username,$password);
mysql_select_db("epiz_23125428_informatics");
if(!$con){
    echo "Failed";
}
if(isset($_POST['retailer'])){
    $table = "retailer";
}
if(isset($_POST['distributor'])){
    $table = "distributor";
}
$user1 = $_POST['fname'];
$user2 = $_POST['lname'];

$user = $user1.$user2;



$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$que = $_POST['que'];
$answer = $_POST['answer'];
$pass = $_POST['password'];


$UID = "D".mt_rand(1,10000) ;
$fuser = mysql_real_escape_string($user);
$hash = password_hash($pass, PASSWORD_BCRYPT);

$sql = mysql_query("SELECT * FROM distributor where UID = '$UID'") or die("failed");
$res = mysql_fetch_array($sql);
if($res > 0){
    $UID = "D".mt_rand(1,10000);
}

$sql = "SELECT name FROM $table where name = '$fuser'";
$result = mysql_query($sql);
if(mysql_num_rows($result)!=0){
   echo "user exists";
}
else{
    $sql = "INSERT INTO $table (UID,name,password,gender,email,phone) VALUES ('$UID','$fuser','$hash','$gender','$email','$phone')";
    if(!mysql_query($sql)){
        echo "Fail".mysql_error();
    }
    else{
        mysql_select_db("epiz_23125428_recovery");

        $sql = "INSERT INTO passrecovery (name,sec_que,sec_ans) VALUES ('$fuser','$que','$answer')";
        if(!mysql_query($sql)){
           echo "Fail".mysql_error();
        }

        header("Location: http://rmdtechnologies.in/login.html");
    }
    
}

