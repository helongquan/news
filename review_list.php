<?php
include_once("inc/header.php");
include_once("functions/page.php");   //新添加的，为了实现分页
 ?>
<?php
include_once("functions/database.php");
// 三个数据表外连接查询，旨在遍历出不同用户的评论，并且显示不同用户的姓名
$sqls="select * from review left join news on review.news_id=news.news_id join users on users.user_id=news.user_id order by review_id desc";
$sql="select * from review review left join news on review.news_id=news.news_id";
//新添加的，为了实现分页
$sqldd="select * from review";   
get_connection();

//新添加的，为了实现分页 开始
// $result_news=mysql_query($sqldd);  
// $total_records=mysql_num_rows($result_news);
// $page_size;
// if (isset($_GET["page_current"])) {
// 	$page_current=$_GET["page_current"];
// 	}else{
// 		$page_current=1;
// }
// $start=($page_current-1)*$page_size;
// $result_sql="select * from review order by review_id desc limit $start,$page_size";
// $result_set=mysql_query($result_sql);
// //新添加的，为了实现分页 结束


$result_set=mysql_query($sqls);
close_connection();
echo "<div class='review_title'><h2>系统所有评论信息如下：</h2></div>";
while ($row=mysql_fetch_array($result_set)) {
	echo "<div class='pinglun'>".$row['name']."在文章<a href='news_detail.php?news_id=".$row['news_id']."'>".$row["title"]."</a>中说：<br/>";
	echo "<div class='review_content'>".$row['review_content']."</div>";
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

$url=$_SERVER["PHP_SELF"];
page($total_records,$page_size,$page_current,$url,$keyword);
 ?>
<?php 
include_once("inc/footer.php");
 ?>