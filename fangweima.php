<?php
include_once("inc/header.php");
include_once("functions/is_login.php");
session_start();
if (!is_login()) {
	echo "请你登录系统后，再访问该页面！";
	return;
}
 ?>

<div class="container">
	<form action="add_fangweima.php" method="post">
		<div class="form-group">
			<h2 class="page_title">防伪码添加页面，请输入防伪码</h2>
			<label>添加防伪码</label>
			<input type="text" class="form-control" name="code" value="<?php echo $code?>" placeholder="输入要添加的防伪码">
		</div>
		<input type="submit" name="" class="btn btn-primary" value="添加"/>
	</form>
</div>


<div class="container">
	<div class="form-group">
		<h2 class="page_title">防伪码列表</h2>
		<div class="fangweima_list">
			<?php
				get_connection();
				$result_set_13=mysql_query($search_fangweima);
				close_connection();
				if (mysql_num_rows($result_set_13)==0) {
					exit("暂无记录！");
				}
				while ($row=mysql_fetch_array($result_set_13)) {
			 ?>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><?php echo $row['code']?></div>
			<?php
			}
			?>
		</div>
	</div>
</div>


<div class="container">
	<form action="search_fangweima.php" method="post">
		<div class="form-group">
			<h2 class="page_title">防伪码查询</h2>
			<label>输入防伪码</label>
			<input type="text" class="form-control" name="code" value="<?php echo $code?>" placeholder="输入要查询的防伪码">
		</div>
		<input type="submit" name="" class="btn btn-primary" value="查询防伪码"/>
	</form>
</div>

<?php
include_once("inc/footer.php");
 ?>