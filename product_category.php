<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
?>

<div id="category_list">
	<div class="container">

	<ul class="irbox">
	    <li><a href="add_product.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加产品</a></li>
		<li><a href="add_product_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加产品分类</a></li>
		<li><a href="product_category.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 产品分类中心</a></li>
	</ul>


	<h2 class="page_title">产品分类中心</h2>
		<div class="category_list">
			<?php
				get_connection();
				$result_set_12=mysql_query($search_product_category);
				close_connection();
				if (mysql_num_rows($result_set_12)==0) {
					exit("暂无记录！");
				}
				while ($row=mysql_fetch_array($result_set_12)) {
			 ?>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><span class="left"><a href="product_category_detail.php?productcategory_id=<?php echo $row['productcategory_id']?>"><?php echo $row['name']?></a></span><span class="alignright"><a href="delete_product_category.php?productcategory_id=<?php echo $row['productcategory_id']?>"><i class="glyphicon glyphicon-trash"></i></a></span></div>
			<?php
			}
			?>
		</div>
	</div>
</div>


<?php
// header("Location:add_category.php");
include_once("inc/footer.php");
 ?>