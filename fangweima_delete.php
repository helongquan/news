<?php
include_once("inc/header.php");
include_once("functions/is_login.php");
session_start();
if (!is_login()) {
	echo "<div class='container'>";
	echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>嘿!</strong> 请你登录系统后，再删除！</div>";
	echo "<a href='login.php' class='btn btn-primary'>登录</a>";
	echo "</div>";
	include_once("inc/footer.php");
	return;
}
$fangweima_id=$_GET["fangweima_id"];
get_connection();
mysql_query("delete from fangweima where fangweima_id=$fangweima_id");
close_connection();
echo "<script>alert('防伪码删除成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
$message="防伪码删除成功！";
header("Location:category_list.php?message=$message");
 ?>

 <?php
include_once("inc/footer.php");
 ?>