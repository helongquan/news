<?php
include_once("inc/header.php");
$code=$_POST["code"];
$currentDate= date("Y-m-d H:i:s");
$sql="insert into fangweima values(null,'$code','$currentDate')";
get_connection();
$result_set=mysql_query($sql);
echo "<script>alert('防伪码添加成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
close_connection();
$message="防伪码添加成功！";
header("Location:fangweima.php?message=$message");

include_once("inc/footer.php");
 ?>