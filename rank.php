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
	<div class="form-group">
		<h2 class="page_title">学生信息列表</h2>
		<div class="table-responsive">
	        <table class="table table-striped">
	          <thead>
	            <tr>
	              <th>用户编号</th>
	              <th>用户名</th>
	              <th>分数</th>
	            </tr>
	          </thead>
	          <tbody class="colorfoul">
	            <?php
	              get_connection();
	              $result_set=mysql_query($search_users);
	              close_connection();
	              if (mysql_num_rows($result_set)==0) {
	                exit("暂无记录！");
	              }
	              while ($rows=mysql_fetch_array($result_set)) {
	             ?>
	            <tr>
	              <td><?php echo $rows['user_id']?></td>
	              <td><?php echo $rows['name']?></td>
				  <td>
				  	<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="750" style="width:100%">
					    <?php echo $rows['grade']?>
					  </div>
					</div>
				  </td>
	            </tr>

	            <?php
	            }
	             ?>
	          </tbody>
	        </table>
	      </div>





	</div>
</div>


<div class="container">
	<form action="search_rank.php" method="post">
		<div class="form-group">
			<h2 class="page_title">分数排名查询</h2>
			<label>输入分数</label>
			<input type="text" class="form-control" name="grade" value="<?php echo $grade?>" placeholder="输入分数" required="required">
			<input type="hidden" class="form-control" name="publish_time" value="">
		</div>
		<input type="submit" name="" class="btn btn-primary" value="立即查询"/>
	</form>
</div>

<?php
include_once("inc/footer.php");
 ?>