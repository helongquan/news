<?php
session_start();
include_once("inc/header.php");
get_connection();
$grade=$_POST["grade"];
$grade_sql="select * from users where grade>='$grade' order by grade desc";
$result_set=mysql_query($grade_sql);
$count=mysql_num_rows($result_set);

?>
<div class="container">
	<?php
	if(!$count==0){
	echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>不错!</strong> 帮你找到以下的信息！</div>";
	echo "<div class='panel panel-primary'>
			  <div class='panel-heading'><span style='color:#def9d2'>".$_SESSION['name']."</span> 用户的排名信息</div>
			  <div class='table-responsive'>
				  <table class='table'>
				    <tr>
				    	<td>分数</td>
				    	<td>排名</td>
				    	<td>查询时间</td>
				    </tr>
				    <tr>
				    	<td>".$grade."</td>
				    	<td>第 ".($count+1)." 名</td>
				    	<td>".date('y-m-d h:i:s',time())."</td>
				    </tr>
				  </table>
			  </div>
		  </div>";
	echo "排在你前面的有以下这些人：";
	?>
	<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>学生编号</th>
              <th>学生名</th>
              <th>分数</th>
            </tr>
          </thead>
          <tbody>
            <?php
              get_connection();
              $result_set=mysql_query($grade_sql);
              close_connection();
              if (mysql_num_rows($result_set)==0) {
                exit("你是第一名！");
              }
              while ($rows=mysql_fetch_array($result_set)) {
             ?>
            <tr>
              <td><?php echo $rows['user_id']?></td>
              <td><?php echo $rows['name']?></td>
              <td><?php echo $rows['grade']?></td>
            </tr>
            <?php
            }
             ?>
          </tbody>
        </table>
      </div>

	<?php
	echo "最终解释权归鸢尾花序。";?>
</div>
	<?php
	include_once("inc/footer.php");
	header("Location:rank.php");
	 ?>

	<?php
	}
	else{
		echo "<script>alert('太棒了！你是第一名！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}
	close_connection();
	?>