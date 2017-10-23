<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
 ?>

<div class="container">
	<div class="form-group">
		<h2 class="page_title">新闻分类添加页面</h2>
		<form method="post" action="category_list.php">
			<label>添加新闻分类</label>
			<input type="text" class="form-control" name="name">
			<input type="submit" class="btn btn-default" name="submit" value="添加">
		</form>
	</div>
</div>

<div id="category_list">
	<div class="container">
	<h2 class="page_title">新闻分类</h2>
		<div class="category_list">
			<?php
				get_connection();
				$result_set_12=mysql_query($search_category);
				close_connection();
				if (mysql_num_rows($result_set_12)==0) {
					exit("暂无记录！");
				}
				while ($row=mysql_fetch_array($result_set_12)) {
			 ?>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><a href="category_detail.php?category_id=<?php echo $row['category_id']?>"><?php echo $row['name']?></a></div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
include_once("inc/footer.php");
 ?>