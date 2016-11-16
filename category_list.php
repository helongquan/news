<?php
header("Content-type: text/html; charset=utf-8");
include_once("functions/database.php");
$name=$_POST["name"];
$category_id=$_POST[""];
get_connection();
$sql="insert into category values('$category_id','$name')";
$result_set=mysql_query($sql);
echo "<script>alert('新闻分类提交成功')</script>";
close_connection();
header("Location:add_category.php");
?>