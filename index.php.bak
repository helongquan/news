<?php
	include_once("inc/header.php");
 ?>
 <?php
include_once("functions/database.php");
if (isset($_GET["message"])) {
	echo $_GET["message"]."<br/>";
}
// 构造查询所有新闻的SQL语句
// $search_sql="select * from news order by news_id desc";
// $search_category="select * from category order by category_id desc";
// 若进行模糊查询，取得模糊查询的关键字keyword
$keyword="";
if (isset($_GET["keyword"])) {
	$keyword=$_GET["keyword"];
	// 构造模糊查询的SQL语句
	$search_sql="select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
}
?>

<?php
include_once("inc/siderbar.php");
 ?>
 
	<div id="news_list">
		<div class="content">
			<form method="get" action="news_list.php">
				  <div class="col-lg-7 nopadding">
				    <div class="input-group">
				      <input type="text" class="form-control" name="keyword" placeholder="请输入关键词" value="<?php echo $keyword;?>">
				      <span class="input-group-btn">
				        <button class="btn btn-primary"  type="submit">搜索</button>
				      </span>
				    </div>
				  </div>
			</form>

			<div class="content">
				<div class="add_list">
					<a href="news_add.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加新闻</a>
					<a href="add_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加分类</a>
					<a href="category_center.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 分类中心</a>
					<a href="review_list.php" class="btn btn-warning"><i class="glyphicon glyphicon-sunglasses"></i> 查看评论</a>
					<a href="news_list.php" class="btn btn-info"><i class="glyphicon glyphicon-sunglasses"></i> 查看新闻</a>
					<a href="fangweima.php" class="btn btn-info"><i class="glyphicon glyphicon-barcode"></i> 添加防伪码</a>
				</div>
			</div>
			<hr>
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
					$result_set=mysql_query($search_sql_limit_8);
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
			<a href="more.php" class="more">阅读更多</a>
			</table>
		</div>
	</div>

<?php
include_once("inc/footer.php");
 ?>