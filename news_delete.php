<?php
include_once("inc/header.php");
include_once("functions/is_login.php");
session_start();
if (!is_login()) {
	echo "请你登录系统后，再删除！";
	return;
}
include_once("inc/header.php");
$news_id=$_GET["news_id"];
get_connection();
mysql_query("delete from review where news_id=$news_id");
mysql_query("delete from news where news_id=$news_id");
close_connection();
$message="新闻及相关评论信息删除成功！";
header("Location:news_list.php?message=$message");
 ?>

 <?php
include_once("inc/footer.php");
 ?>