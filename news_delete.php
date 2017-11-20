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
include_once("inc/header.php");
$news_id=$_GET["news_id"];
get_connection();
mysql_query("delete from review where news_id=$news_id");
mysql_query("delete from news where news_id=$news_id");
close_connection();
echo "<script>alert('新闻及相关评论信息删除成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
// $message="新闻及相关评论信息删除成功！";
header("Location:news_list.php?message=$message");
 ?>

 <?php
include_once("inc/footer.php");
 ?>