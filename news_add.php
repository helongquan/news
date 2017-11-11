<?php
	include_once("inc/header.php");
	include_once("functions/is_login.php");
	session_start();
	if (!is_login()) {
		echo "<div class='container'>";
		echo "请你登录系统后，再访问该页面！<br/>";
		echo "<a href='login.php' class='btn btn-primary'>登录</a>";
		echo "</div>";
		include_once("inc/footer.php");
		return;
	}
 ?>
<div class="container">
	<form method="post" action="news_save.php" enctype="multipart/form-data" class="form-horizontal">
		<div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">标题：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="标题">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail22" class="col-sm-2 control-label">内容：</label>
		    <div class="col-sm-10">
		      <textarea name="content" id="inputEmail22" class="form-control ckeditor" rows="8"></textarea>
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail22" class="col-sm-2 control-label">类别：</label>
		    <div class="col-sm-10">
			<select class="form-control" name="category_id" size="1">
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
			  </select>
			</div>
		</div>
		<!-- <input type="file" name="news_file" size="50">
			  <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
			  <br/>
			  <input type="submit" value="提交">
			  <input type="reset" value="清空"> -->

		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label">附件：</label>
		    <div class="col-sm-10">
			    <input type="file" id="exampleInputFile1" name="news_file" size="50">
			    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
			    <p class="help-block">在这里添加附件，支持的格式有doc,jpg,pdf,png等.</p>
			</div>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label"></label>
		    <div class="col-sm-10">
			    <input type="submit" class="btn btn-primary" value="提交">
			    <input type="reset" class="btn btn-default" value="清空">
			</div>
		</div>
	</form>
</div>
<?php
include_once("inc/footer.php");
 ?>


 <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>