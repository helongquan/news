<?php
include_once("inc/header.php");
$suggestion_content=$_POST["suggestion_content"];
$currentDate= date("Y-m-d H:i:s");
$sql="insert into suggestion values(null,'$suggestion_content','$currentDate')";
get_connection();
$result_set=mysql_query($sql);
echo "<script>alert('您的宝贵意见已经提交成功，如果你还有需要补充的，请继续留言，谢谢！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
close_connection();
$message="您的宝贵意见已经提交成功！";
header("Location:research.php?message=$message");

include_once("inc/footer.php");
 ?>