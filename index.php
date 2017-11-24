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

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner" role="listbox">
		        <div class="item active">
		          <img class="first-slide" src="http://nocti.spartanya.com/wp-content/uploads/2017/06/a.jpg" alt="">
		          <div class="container">
		            <div class="carousel-caption">
		              <h3>鸢尾花序</h3>
		              <p>鸢尾花序商城新开业，产品5折优惠，限时折扣，先到先得.</p>
		              <p class="mobile_hidden"><a class="btn btn-info" href="shopping.php" role="button">立即查看</a></p>
		            </div>
		          </div>
		        </div>
		        <div class="item">
		          <img class="second-slide" src="http://nocti.spartanya.com/wp-content/uploads/2017/06/b.jpg" alt="Second slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h3>新闻中心</h3>
		              <p>发布新闻内容，爆料有奖，爆料送积分，积分可提现.</p>
		              <p class="mobile_hidden"><a class="btn btn-info" href="news_list.php" role="button">立即查看</a></p>
		            </div>
		          </div>
		        </div>
		        <div class="item">
		          <img class="third-slide" src="http://nocti.spartanya.com/wp-content/uploads/2017/06/c.jpg" alt="Third slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h3>服务中心</h3>
		              <p>我们推出了一系列的服务，正在不断的更新服务内容.</p>
		              <p class="mobile_hidden"><a class="btn btn-info" href="user.php" role="button">立即查看</a></p>
		            </div>
		          </div>
		        </div>
		      </div>
		      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">上一个</span>
		      </a>
		      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">下一个</span>
		      </a>
		    </div>

			<div class="row index_servic">
		        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		          <p><i class="glyphicon glyphicon-shopping-cart"></i></p>
		          <h3>商城中心</h3>
		          <p class="mobile_hidden">鸢尾花序商城新开业，产品均5折优惠，限时折扣.</p>
		          <p><a class="btn btn-primary" href="shopping.php" role="button">了解详情 &raquo;</a></p>
		        </div>
		        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 borddr">
		          <p><i class="glyphicon glyphicon-list-alt"></i></p>
		          <h3>新闻中心</h3>
		          <p class="mobile_hidden">发布新闻内容，爆料有奖，爆料送积分，积分提现.</p>
		          <p><a class="btn btn-primary" href="news_list.php" role="button">了解详情 &raquo;</a></p>
		        </div>
		        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		          <p><i class="glyphicon glyphicon-headphones"></i></p>
		          <h3>服务中心</h3>
		          <p class="mobile_hidden">我们推出了一系列服务，正在不断的更新服务内容.</p>
		          <p><a class="btn btn-primary" href="user.php" role="button">了解详情 &raquo;</a></p>
		        </div>
		      </div>

			<div class="btn-group btn-group-justified" role="group" aria-label="..." id="btn-group-justified">
			    <a href="news_add.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加新闻</a>
				<a href="add_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加分类</a>
				<a href="category_center.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 分类中心</a>
				<a href="review_list.php" class="btn btn-warning"><i class="glyphicon glyphicon-comment"></i> 评论中心</a>
				<a href="news_list.php" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i> 新闻中心</a>
				<a href="news_list.php" class="btn btn-danger"><i class="glyphicon glyphicon-shopping-cart"></i> 购物中心</a>
				<a href="jisuanqi.php" class="btn btn-info"><i class="glyphicon glyphicon-erase"></i> 计算器</a>
				<a href="rank.php" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt"></i> 查排名</a>
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

