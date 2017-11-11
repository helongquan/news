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
// include_once("inc/siderbar.php");
 ?>
 
	<div id="news_list">
		<div class="content container">
			<form method="get" action="news_list.php">
				  <div class="col-lg-12 nopadding">
				    <div class="input-group">
				      <input type="text" class="form-control" name="keyword" placeholder="请输入关键词" value="<?php echo $keyword;?>">
				      <span class="input-group-btn">
				        <button class="btn btn-primary"  type="submit">搜索</button>
				      </span>
				    </div>
				  </div>
			</form>
			<div class="btn-group btn-group-justified" role="group" aria-label="..." id="btn-group-justified">
			    <a href="news_add.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加新闻</a>
				<a href="add_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加分类</a>
				<a href="category_center.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 分类中心</a>
				<a href="review_list.php" class="btn btn-warning"><i class="glyphicon glyphicon-comment"></i> 评论中心</a>
				<a href="news_list.php" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i> 新闻中心</a>
				<a href="news_list.php" class="btn btn-danger"><i class="glyphicon glyphicon-shopping-cart"></i> 购物中心</a>
				<a href="fangweima.php" class="btn btn-info"><i class="glyphicon glyphicon-barcode"></i> 添加防伪码</a>
			</div>
			<hr>
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
					// $length = mysql_field_len($result_set, 10);
					close_connection();
					if (mysql_num_rows($result_set)==0) {
						exit("暂无记录！");
					}
					while ($row=mysql_fetch_array($result_set)) {
				 ?>
				<div class="news_lis">
				 <div class="media-left">
				    <a href="news_detail.php?news_id=<?php echo $row['news_id']?>">
				      <img class="media-object" src="uploads/<?php echo $row['attachment']?>" alt="<?php echo $row['news_id']?>">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading"><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></h4>
				    <div class="index_content">
				    	<p><?php echo $row['content']; ?></p>
				    	<p><a href="news_edit.php?news_id=<?php echo $row['news_id']?>">编辑</a>&nbsp;&nbsp;<a href="news_delete.php?news_id=<?php echo $row['news_id']?>">删除</a></p>
				    </div>
				  </div>
				</div>
				<?php
			}
				 ?>
			<a href="news_list.php" class="more">阅读更多</a>
		</div>
	</div>

<?php
include_once("inc/footer.php");
 ?>

