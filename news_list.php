<?php
include_once("inc/header.php");
// include_once("functions/page.php");

 ?>
<div id="news_list" class="content container">
	<!-- <div class="container"> -->
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
				<a href="fangweima.php" class="btn btn-info"><i class="glyphicon glyphicon-barcode"></i> 添加防伪码</a>
			</div>

		<div class="row">
	<!-- </div> -->
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
					$result_sql="select * from news where title like '%keyword%' or content like '%keyword%' order by news_id desc limit $start,$page_size";
			}
			$result_set=mysql_query($search_sql_all_news);

			// $result_news=mysql_query($search_sql_all_news);
			// $total_records=mysql_num_rows($result_news);
			// $page_size=3;
			close_connection();
			if (mysql_num_rows($result_set)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set)) {
		 ?>

			<div class="col-sm-6 col-md-4 news_les">
			    <div class="thumbnail">
			      <img src="uploads/<?php echo $row['attachment']?>">
			      <div class="caption">
			        <h3><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></h3>
			        <p><a href="news_edit.php?news_id=<?php echo $row['news_id']?>" class="btn btn-primary" role="button">编辑 <i class="glyphicon glyphicon-pencil"></i></a> <a href="news_delete.php?news_id=<?php echo $row['news_id']?>" class="btn btn-default" role="button">删除 <i class="glyphicon glyphicon-trash"></i></a></p>
			      </div>
			    </div>
			</div>

		<?php
	}
		 ?>
	</div>
</div>

<?php
include_once("inc/footer.php");
 ?>