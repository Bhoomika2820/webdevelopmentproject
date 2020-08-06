<?php
include "config.php"
$uname=mysqli_real_escape_string($conn,$_POST['username'])
$password=mysqli_real_escape_string($conn,$_POST['password'])
if ($uname != "" && $password != ""){
    $sql="select*from commitee_head_login where username='".$uname."'and password='".$password."'limit 1";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}
?>