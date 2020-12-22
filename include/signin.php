<?php
$loginemail = $_REQUEST['loginemail'];
$loginPassword = md5($_REQUEST['loginPassword']);

require_once 'connection.php';
$q = "SELECT * FROM users WHERE email='$loginemail' AND password='$loginPassword'";
$res = mysqli_query($con,$q);
if(mysqli_num_rows($res)>0){
    while($r = mysqli_fetch_array($res)){
        session_start();
        $id = $r['id'];
        $name = $r['email'];
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $loginemail;
        echo 'success';
    }
}else{
    echo 'Invalid email address and password';
}
