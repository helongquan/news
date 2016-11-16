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
<form method="get" action="news_list.php">
请输入关键词：<input type="text" name="keyword" value="<?php echo $keyword?>">
	<input type="submit" name="" value="搜索">
</form>
<a href="news_add.php"><button>添加新闻</button></a>
<br/>
<br/>
<table>
	<?php
		get_connection();
		$result_set=mysql_query($search_sql);
		close_connection();
		if (mysql_num_rows($result_set)==0) {
			exit("暂无记录！");
		}
		while ($row=mysql_fetch_array($result_set)) {
	 ?>
	<tr>
		<td>
			<a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a>
		</td>
		<td>
			<a href="news_edit.php?news_id=<?php echo $row['news_id']?>">编辑</a>
		</td>
		<td>
			<a href="news_delete.php?news_id=<?php echo $row['news_id']?>">删除</a>
		</td>
	</tr>
	<?php
}
	 ?>
</table>