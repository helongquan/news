<?php
include_once("inc/header.php");
 ?>
<?php
include_once("functions/database.php");
// 三个数据表外连接查询，旨在遍历出不同用户的评论，并且显示不同用户的姓名
$sql="select * from review left join news on review.news_id=news.news_id join users on users.user_id=news.user_id order by review_id desc";
get_connection();
$result_set=mysql_query($sql);
close_connection();
echo "系统所有评论信息如下：<br/>";
while ($row=mysql_fetch_array($result_set)) {
	echo "<div class='pinglun'>".$row['name']."说：".$row["content"]."<br/>";
	echo "日期：".$row["publish_time"]." ";
	echo "IP地址：".$row["ip"]." ";
	echo "状态：".$row["state"]."<br/>";
	echo "<a href='review_delete.php?review_id=".$row['review_id']."'>删除</a>";
	echo " ";
	if ($row["state"]=="未审核") {
		echo "<a href='review_verify.php?review_id=".$row["review_id"]."'>审核</a>";
	}
	echo "<hr/></div>";
}
 ?>
<?php
echo $row;
 ?>
