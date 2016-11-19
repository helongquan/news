<?php
	include_once("inc/header.php")
 ?>
<form method="post" action="news_save.php" enctype="multipart/form-data">
	标题：<input type="text" name="title" size="60"><br/>
	内容：<textarea cols="60" rows="16" name="content"></textarea><br/>
	类别：<select name="category_id" size="1">
			<?php
				include_once("functions/database.php");
				get_connection();
				$result_set=mysql_query("select * from category");
				close_connection();
				while ($row=mysql_fetch_array($result_set)) {
				?>
				<option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?></option>
				<?php
				}
				?>
		  </select><br/>
	附件：<input type="file" name="news_file" size="50">
		  <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
		  <br/>
		  <input type="submit" value="提交">
		  <input type="reset" value="清空">
</form>
<?php 

 ?>