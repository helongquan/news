<?php
include_once("functions/database.php");
$news_id=$_POST["news_id"];
$category_id=$_POST["category_id"];
$title=$_POST["title"];
$content=$_POST["content"];
$sql="update news set category_id=$category_id,title='$title',content='$content' where news_id=$news_id";
get_connection();
mysql_query($sql);
close_connection();
$message="新闻信息修改成功";
header("Location:news_list.php?message=$message");
 ?>