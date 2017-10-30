<div id="siderbar">
	<h3>最新文章</h3>
	<ul class="news_sidebar_list">
		<?php
			get_connection();
			$result_set_11=mysql_query($search_sql_limit_5);
			close_connection();
			if (mysql_num_rows($result_set_11)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set_11)) {
		 ?>
		<li><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><i class="glyphicon glyphicon-menu-right"></i> <?php echo $row['title']?></a></li>
		<?php
		}
		?>
		<li><a href="news_list.php"><i class="glyphicon glyphicon-hand-right"></i> 查看全部</a></li>
	</ul>

	<h3>文章分类</h3>
	<ul class="category_sidebar_list">
		<?php
			get_connection();
			$result_set_12=mysql_query($search_category_limit_5);
			close_connection();
			if (mysql_num_rows($result_set_12)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set_12)) {
		 ?>
		<li><a href="category_detail.php?category_id=<?php echo $row['category_id']?>"><i class="glyphicon glyphicon-menu-right"></i> <?php echo $row['name']?></a></li>
		<?php
		}
		?>
		<li><a href="category_center.php"><i class="glyphicon glyphicon-hand-right"></i> 查看全部</a></li>
	</ul>
	
</div>