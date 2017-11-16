<?php
	include_once("inc/header.php");
	include_once("functions/is_login.php");
	session_start();
	if (!is_login()) {
		echo "<div class='container'>";
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>嘿!</strong> 请你登录系统后，再访问该页面！</div>";
		echo "<a href='login.php' class='btn btn-primary'>登录</a>";
		echo "</div>";
		include_once("inc/footer.php");
		return;
	}
 ?>
<div class="container">
	<form method="post" action="save_product.php" enctype="multipart/form-data" class="form-horizontal">
		<div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">产品名称：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="product_title" id="inputEmail3" placeholder="产品名称">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail5" class="col-sm-2 control-label">产品价格：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="product_price" id="inputEmail5" placeholder="产品价格">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail7" class="col-sm-2 control-label">产品数量：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="quantity" id="inputEmail7" placeholder="产品数量">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail26" class="col-sm-2 control-label">产品内容：</label>
		    <div class="col-sm-10">
		      <textarea name="product_content" id="inputEmail26" class="form-control ckeditor" rows="8"></textarea>
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail20" class="col-sm-2 control-label">产品颜色：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="color" id="inputEmai20" placeholder="产品颜色">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail29" class="col-sm-2 control-label">产品重量：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="weight" id="inputEmai29" placeholder="产品重量">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail28" class="col-sm-2 control-label">产品尺寸：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="inch" id="inputEmai28" placeholder="产品尺寸">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail27" class="col-sm-2 control-label">品牌名称：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="brand" id="inputEmai27" placeholder="品牌名称">
		    </div>
		</div>

		<div class="form-group">
		    <label for="inputEmail22" class="col-sm-2 control-label">所属分类：</label>
		    <div class="col-sm-10">
			<select class="form-control" name="productcategory_id" size="1">
				<?php
					include_once("functions/database.php");
					get_connection();
					$result_set=mysql_query("select * from productcategory");
					close_connection();
					while ($row=mysql_fetch_array($result_set)) {
					?>
					<option value="<?php echo $row['productcategory_id'];?>"><?php echo $row['name'];?></option>
					<?php
					}
					?>
			  </select>
			</div>
		</div>

		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label">缩略图：</label>
		    <div class="col-sm-10">
			    <input type="file" id="exampleInputFile1" name="thumbnail" size="50">
			    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
			    <p class="help-block">在这里添加附件，支持的格式有doc,jpg,pdf,png等.</p>
			</div>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile1" class="col-sm-2 control-label"></label>
		    <div class="col-sm-10">
			    <input type="submit" class="btn btn-primary" value="发布">
			    <input type="reset" class="btn btn-default" value="重置">
			</div>
		</div>
	</form>
</div>
<?php
include_once("inc/footer.php");
 ?>