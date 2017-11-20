<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
?>

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
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><span class="left"><a href="category_detail.php?category_id=<?php echo $row['category_id']?>"><?php echo $row['name']?></a></span><span class="alignright"><a href="category_delete.php?category_id=<?php echo $row['category_id']?>"><i class="glyphicon glyphicon-trash"></i></a></span></div>
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