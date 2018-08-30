<?php
include_once("inc/header.php");
include_once("functions/file_system.php");
$suggestion_content=$_POST["suggestion_content"];
$file_name=$_FILES["news_file"]["name"];
$currentDate= date("Y-m-d H:i:s");
$message=upload($_FILES["news_file"],"uploads");
if ($suggestion_content == null) {
	echo "<script>alert('内容不能为空');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	exit;
}
if ($file_name == null) {
	echo "<script>alert('图片不能为空');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	exit;
}
$sql="insert into suggestion values(null,'$suggestion_content','$file_name','$currentDate')";
if ($message=="文件上传成功！" || $message=="没有选择上传附件！") {
	include_once("functions/database.php");
	get_connection();
	$result_set=mysql_query($sql);
	echo "<script>alert('您的宝贵意见已经提交成功，如果你还有需要补充的，请继续留言，谢谢！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	close_connection();
}
$message="您的宝贵意见已经提交成功！";
header("Location:research.php?message=$message");

include_once("inc/footer.php");
 ?>