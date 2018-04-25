<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
 ?>

<div class="container">

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

	<ul class="irbox">
	    <li><a href="add_product.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加产品</a></li>
		<li><a href="add_product_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加产品分类</a></li>
		<li><a href="product_category.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 产品分类中心</a></li>
	</ul>

	<div class="form-group">
		<h2 class="page_title">产品分类添加页面</h2>
		<form method="post" action="save_product_category.php">
			<label>添加产品分类</label>
			<input type="text" class="form-control" name="name" required="required">
			<input type="submit" class="btn btn-default" name="submit" value="添加">
		</form>
	</div>
</div>

<div id="category_list">
	<div class="container">
	<h2 class="page_title">产品分类</h2>
		<div class="category_list">
			<?php
				get_connection();
				$result_set_19=mysql_query($search_product_category);
				close_connection();
				if (mysql_num_rows($result_set_19)==0) {
					exit("暂无记录！");
				}
				while ($row=mysql_fetch_array($result_set_19)) {
			 ?>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><span class="left"><a href="product_category.php?productcategory_id=<?php echo $row['productcategory_id']?>"><?php echo $row['name']?></a></span><span class="alignright"><a href="delete_product_category.php?productcategory_id=<?php echo $row['productcategory_id']?>"><i class="glyphicon glyphicon-trash"></i></a></span></div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
include_once("inc/footer.php");
 ?>