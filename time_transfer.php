<?php 
include_once("functions/database.php");
$sql="select publish_time from news";
get_connection();
$result_set=mysql_query($sql);
close_connection();
echo "系统所有评论信息如下：<br/>";
while ($row=mysql_fetch_array($result_set)) {
	echo "日期：".$row["publish_time"]." ";
}
 ?>