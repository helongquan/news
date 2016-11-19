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
// 执行3条SQL语句
get_connection();
mysql_query($sql_news_update);
$result_news=mysql_query($sql_news_detail);
$result_review=mysql_query($sql_review_query);
// 取出结果集中新闻条数
$count_news=mysql_numrows($result_news);
// 取出结果集中的该新闻“已审核”的评论条数
$count_review=mysql_num_rows($result_review);
if ($count_news==0) {
	echo "该新闻不存在或已被删除";
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
<div id="news_details">
<table>
	<tr>
		<td width="150">标题：</td>
		<td class="news_details_title"><?php echo $news['title']; ?></td>
	</tr>
	<tr>
		<td width="150">内容：</td>
		<td><?php echo $news['content']; ?></td>
	</tr>
	<tr>
		<td width="150">附件：</td>
		<td><img src="uploads/<?php echo $news['attachment']?>"></td>
	</tr>
	<tr>
		<td width="150">发布者：</td>
		<td><?php echo $user['name']; ?></td>
	</tr>
	<tr>
		<td width="150">类别：</td>
		<td><?php echo $category['name']; ?></td>
	</tr>
	<tr>
		<td width="150">发布时间：</td>
		<td><?php echo $news['publish_time']; ?></td>
	</tr>
	<tr>
		<td width="150">点击次数：</td>
		<td><?php echo $news['clicked']; ?></td>
	</tr>
</table>
</div>
<?php
// 显示查看评论超链接
if ($count_review>0) {
	echo "<a href='review_news_list.php?news_id=".$news['news_id']."'>共有".$count_review."条评论</a><br/>";
}else{
	echo "该新闻暂无评论！<br/>";
}
 ?>
<br/>
<form action="review_save.php" method="post">
	添加评论：<br/><textarea name="content" cols="50" rows="5"></textarea><br/>
	<input type="hidden" name="news_id" value="<?php echo $news['news_id'];?>">
	<input type="submit" name="评论">
</form>
