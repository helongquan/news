<?php
include_once("inc/header.php");
$code=$_POST["code"];
$sql="insert into fangweima values(null,'$code')";
get_connection();
$result_set=mysql_query($sql);
echo "<script>alert('防伪码添加成功！')</script>";
close_connection();
$message="防伪码添加成功！";
header("Location:fangweima.php?message=$message");

include_once("inc/footer.php");
 ?>