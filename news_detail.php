<?php
include_once("inc/header.php");
 ?>
<?php
include_once("functions/database.php");
$news_id=$_GET["news_id"];
// 构造3条SQL语句
$sql_news_update="update news set clicked=clicked+1 where news_id=$news_id";
$sql_news_detail="select * from news where news_id=$news_id";
$sql_review_query="select * from review where news_id=$news_id and state='已审核'";
$sqls="select * from review left join news on review.news_id=news.news_id join users on users.user_id=news.user_id order by review_id desc";
// 执行3条SQL语句
get_connection();
mysql_query($sql_news_update);
$result_news=mysql_query($sql_news_detail);
$result_review=mysql_query($sql_review_query);
$review_all_list=mysql_query($sqls);
// 取出结果集中新闻条数
$count_news=mysql_numrows($result_news);
// 取出结果集中的该新闻“已审核”的评论条数
$count_review=mysql_num_rows($result_review);
if ($count_news==0) {
	echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>很抱歉!</strong> 该新闻不存在或者已经被删除了！</div>";
	exit;
}
// 根据新闻信息中的user_id查询对应的用户信息
$news=mysql_fetch_array($result_news);
$user_id=$news["user_id"];
$sql_user="select * from users where user_id=$user_id";
$result_user=mysql_query($sql_user);
$user=mysql_fetch_array($result_user);
// 根据新闻信息中的category_id查询对应的新闻类别信息
$category_id=$news["category_id"];
$sql_category="select * from category where category_id=$category_id";
$result_category=mysql_query($sql_category);
$category=mysql_fetch_array($result_category);
close_connection();
mysql_free_result($result_user);
mysql_free_result($result_category);
mysql_free_result($result_news);
mysql_free_result($result_review);
// 显示新闻详细信息
 ?>
<div id="news_details" class="container">

	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><?php echo $news['title']; ?></div>
	  <p class="post_some"><span><i class="glyphicon glyphicon-user"></i> <?php echo $user['name']; ?></span>&nbsp;&nbsp;<span><i class="glyphicon glyphicon-th-list"></i> <?php echo $category['name']; ?></span>&nbsp;&nbsp;<span><i class="glyphicon glyphicon-time"></i> <?php echo $news['publish_time']; ?></span>&nbsp;&nbsp;<span><i class="glyphicon glyphicon-eye-open"></i> <?php echo $news['clicked']; ?></span></p>
	  <div class="panel-body">
	    <img src="uploads/<?php echo $news['attachment']?>">
		<?php echo $news['content']; ?>
	  </div>
	</div>



	<?php
	// 显示查看评论超链接
	if ($count_review>0) {
		echo "<a href='review_news_list.php?news_id=".$news['news_id']."'>共有".$count_review."条评论</a><br/>";
		echo "<div class='review_title'><h2>网友评论：</h2></div>";
				while ($row=mysql_fetch_array($review_all_list)) {
					echo "<div class='pinglun'>".$row['name']."说：<br/>";
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
				echo $row;
	}else{
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>快!</strong> 该新闻暂无评论。</div>";
	}
	 ?>
	<br/>
	<form action="review_save.php" method="post">
		添加评论：<br/><textarea id="textarea12" name="content" style='min-height:400px;width:100%'></textarea><br/>
		<input type="hidden" name="news_id" value="<?php echo $news['news_id'];?>">
		<input type="submit" name="评论">
	</form>
</div>
<?php
	include_once("inc/footer.php");
 ?>
