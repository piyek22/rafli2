<?php
session_start();
include "CONNECT.php";
$username = $_POST['uname'];
$password = $_POST['psw'];

$login = mysqli_query($db,"select * from user where username='$username'and password ='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
    $_SESSION['username'] = $username;
    header("location:INDEX.php");
}else{
    header("location:login.php?pesan=gagal");
}