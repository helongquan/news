<?php
	echo "<h2>这是首页</h2><br/>";
 ?>
 <?php
include_once("functions/database.php");
if (isset($_GET["message"])) {
	echo $_GET["message"]."<br/>";
}
// 构造查询所有新闻的SQL语句
$search_sql="select * from news order by news_id desc";
// 若进行模糊查询，取得模糊查询的关键字keyword
$keyword="";
if (isset($_GET["keyword"])) {
	$keyword=$_GET["keyword"];
	// 构造模糊查询的SQL语句
	$search_sql="select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
}
?>
<table>
	<tr>
		<td><a href="news_add.php">添加新闻</a></td>
		<td><a href="add_category.php">添加分类</a></td>
		<td><a href="review_list.php">查看评论</a></td>
		<td><a href="news_list.php">查看新闻</a></td>
	</tr>
</table>
<br/>
<form method="get" action="news_list.php">
请输入关键词：<input type="text" name="keyword" value="<?php echo $keyword;?>">
	<input type="submit" name="" value="搜索">
</form>