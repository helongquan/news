<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
// include_once("functions/database.php");
$name=$_POST["name"];
$category_id=$_POST[""];
get_connection();
$sql="insert into category values('$category_id','$name')";
$result_set=mysql_query($sql);
echo "<script>alert('新闻分类提交成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
close_connection();
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
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><a href="category_detail.php?category_id=<?php echo $row['category_id']?>"><?php echo $row['name']?></a></div>
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