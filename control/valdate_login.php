<?php
session_start();
require_once "../config/config.php";
$user = $_POST['username'];
$pass = $_POST['pasword'];
$sql = "SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res) >0){
    $_SESSION['user'] = $_POST;
    header("location:index.php");
}else{
    $_SESSION['error'] = "You enterd incorrect Username or Password";
    header("location:login.php");
}