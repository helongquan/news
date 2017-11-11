<?php
include_once("inc/header.php");
include_once("functions/database.php");
$news_id=$_GET["news_id"];
get_connection();
$result_news=mysql_query("select * from news where news_id=$news_id");
$result_category=mysql_query("select * from category");
close_connection();
$news=mysql_fetch_array($result_news);
 ?>
<div class="container">
	<form action="news_update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">标题：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="title" id="inputEmail3" value="<?php echo $news['title']?>">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail22" class="col-sm-2 control-label">内容：</label>
		    <div class="col-sm-10">
		      <textarea name="content" id="inputEmail22" class="form-control ckeditor" rows="8"><?php echo $news['content']?></textarea>
		    </div>
		</div>
		<div class="form-group">
		    <label for="inputEmail22" class="col-sm-2 control-label">类别：</label>
		    <div class="col-sm-10">
			<select class="form-control" name="category_id" size="1">
				<?php
					while ($category=mysql_fetch_array($result_category)) {
					?>
					<option value="<?php echo $category['category_id'];?>" <?php echo ($news['category_id']==$category['category_id'])?"selected":""?>><?php echo $category['name'];?></option>
					<?php
					}
					?>
			  </select>
			</div>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label">附件：</label>
		    <div class="col-sm-10">
			    <input type="file" id="exampleInputFile1" name="news_file" size="50" value="">
			    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
			    <p class="help-block">如果想要修改附件，请上传另外一张媒体文件作为附件，支持的格式有jpg,png.</p>
			</div>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label"></label>
		    <div class="col-sm-10">
			    <input type="submit" name="" class="btn btn-primary" value="修改">
			    <input type="hidden" name="news_id" value="<?php echo $news_id;?>">
			</div>
		</div>
	</form>
</div>
<?php
include_once("inc/footer.php");
 ?>