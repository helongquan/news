<?php
include_once("inc/header.php");
include_once("functions/file_system.php");
$suggestion_noimg_content=$_POST["suggestion_noimg_content"];
$currentDate= date("Y-m-d H:i:s");
if ($suggestion_noimg_content == null) {
	echo "<script>alert('内容不能为空');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	exit;
}
$sql="insert into suggestion_noimg values(null,'$suggestion_noimg_content','$currentDate')";
include_once("functions/database.php");
get_connection();
$result_set=mysql_query($sql);
echo "<script>alert('您的宝贵意见已经提交成功，如果你还有需要补充的，请继续留言，谢谢！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
close_connection();
$message="您的宝贵意见已经提交成功！";
header("Location:add_research-default.php?message=$message");

include_once("inc/footer.php");
 ?>