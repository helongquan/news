<div id="siderbar">
	<h3>最新文章</h3>
	<ul>
		<?php
			get_connection();
			$result_set_11=mysql_query($search_sql_limit_5);
			close_connection();
			if (mysql_num_rows($result_set_11)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set_11)) {
		 ?>
		<li><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></li>
		<br/>
		<?php
		}
		?>
	</ul>

	<h3>文章分类</h3>
	<ul>
		<?php
			get_connection();
			$result_set_12=mysql_query($search_category);
			close_connection();
			if (mysql_num_rows($result_set_12)==0) {
				exit("暂无记录！");
			}
			while ($row=mysql_fetch_array($result_set_12)) {
		 ?>
		<li><a href="category_detail.php?category_id=<?php echo $row['category_id']?>"><?php echo $row['name']?></a></li>
		<br/>
		<?php
		}
		?>
	</ul>
	
</div>