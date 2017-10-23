<?php
include_once("inc/header.php");
include_once("functions/is_login.php");
session_start();
if (!is_login()) {
	echo "请你登录系统后，再删除！";
	return;
}
$category_id=$_GET["category_id"];
get_connection();
mysql_query("delete from category where category_id=$category_id");
mysql_query("delete from news where category_id=$category_id");
close_connection();
echo "<script>alert('".$name."已经被删除!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
$message="分类及该分类下的文章删除成功！";
header("Location:category_list.php?message=$message");
 ?>

 <?php
include_once("inc/footer.php");
 ?>