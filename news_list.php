<?php
include_once("inc/header.php");
 ?>
<div id="news_list">
	<form method="get" action="news_list.php">
	  <div class="form-group">
	    <label class="sr-only" for="exampleInputAmount">请输入关键词</label>
	    <div class="input-group">
	      <div class="input-group-addon">请输入关键词</div>
	      <input type="text" class="form-control" id="exampleInputAmount" name="keyword" value="<?php echo $keyword?>" placeholder="输入关键词">
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary">搜索</button>
	</form>
	<br/>
	<br/>
	<a href="news_add.php" class="btn btn-primary">添加新闻</a>
	<a href="add_category.php" class="btn btn-primary">添加分类</a>
	<a href="review_list.php" class="btn btn-warning">查看评论</a>
	<a href="news_list.php" class="btn btn-info">查看新闻</a>
	<br/>
	<br/>

	<table>
		<?php
			get_connection();
			$page_size=1;
			if (isset($_GET["page_current"])) {
				$page_current=$_GET["page_current"];
				}else{
					$page_current=1;
				}
				$start=($page_current-1)*$page_size;
				$result_sql="select * from news order by news_id desc limit $start,$page_size";
				if (isset($_GET["keyword"])) {
					$keyword=$_GET["keyword"];
					// 构造模糊查询新闻的SQL语句
					$result_sql="select * from news where title like '%keyword%' or content like '%keyword%' order by news_id desc limit $start,$page_size";
				}
			$result_set=mysql_query($search_sql);
			close_connection();
			if (mysql_num_rows($result_set)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set)) {
		 ?>
		<tr>
			<td>
				<a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><img src="uploads/<?php echo $row['attachment']?>"></a>
			</td>
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
</div>

<?php
include_once("inc/footer.php");
 ?>