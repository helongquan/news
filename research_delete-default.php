<?php
include_once("inc/header.php");
include_once("functions/is_login.php");
session_start();
if (!is_login()) {
	echo "请你登录系统后，再删除！";
	return;
}
$suggestion_noimg_id=$_GET["suggestion_noimg_id"];
get_connection();
mysql_query("delete from suggestion_noimg where suggestion_noimg_id=$suggestion_noimg_id");
close_connection();
echo "<script>alert('".$name."已经被删除!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
$message="分类及该分类下的文章删除成功！";
header("Location:research-default.php?message=$message");
 ?>

 <?php
include_once("inc/footer.php");
 ?>