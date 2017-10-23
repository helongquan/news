<?php
include_once("inc/header.php");
$news_id=$_GET["news_id"];
$sql="select * from review where news_id=$news_id and state='已审核' order by review_id desc";
get_connection();
$result_set=mysql_query($sql);
close_connection();
echo "<div class='container'><h2>该新闻的评论如下：</h2>";
while ($row=mysql_fetch_array($result_set)) {
	echo "<div class='review_list'>";
	echo "评论内容：".$row["review_content"]."<br/>";
	echo "评论日期：".$row["publish_time"]."<br/>";
	echo "评论IP地址：".$row["ip"]."</div>";
}
echo "</div>";
?>

<?php
include_once("inc/footer.php");
 ?>