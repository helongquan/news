<div id="siderbar">
	<h3>最新文章</h3>
	<ul>
		<?php
			get_connection();
			$result_set_11=mysql_query($search_sql);
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
</div>