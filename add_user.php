<?php
include_once("inc/header.php");
include_once("functions/database.php");
get_connection();
$name=$_POST["name"];
$password=$_POST["password"];
$authcode=$_POST["authcode"];
$password=md5(md5($password));
$sql="insert into users values(null,'$name','$password','$authcode')";
$result_set=mysql_query($sql);
echo "<script>alert('用户注册成功！')</script>";
close_connection();
header("location:register.php");
?>