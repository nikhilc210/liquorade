<?php
$signupEmail = $_REQUEST['signupEmail'];
$signupPassword = md5($_REQUEST['signupPassword']);
require 'connection.php';
$q = "SELECT * FROM users WHERE email='$signupEmail'";
$res = mysqli_query($con,$q);
if(mysqli_num_rows($res)>0){
    echo 'This email address is already registered with us';
}else{
    $date = date('Y-m-d H:s');
    $q =  "INSERT INTO users(name,email,password,source,created_at) VALUES('Liquorade','$signupEmail','$signupPassword','Email','$date')";
    $res = mysqli_query($con,$q);
    if($res){
        echo 'success';
    }else{
        echo 'Something went wrong';
    }
}