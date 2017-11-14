<?php
include_once("inc/header.php");
get_connection();
$code=$_POST["code"];
$sql="select * from fangweima where code='$code'";
$result_set=mysql_query($sql);
$count=mysql_num_rows($result_set);

?>
<div class="container">
	<?php
	if($count==1){
	echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>不错!</strong> 这个产品是正品！</div>";
	echo "<div class='panel panel-info'>
			  <div class='panel-heading'>产品信息</div>
			  <div class='table-responsive'>
				  <table class='table'>
				    <tr>
				    	<td>防伪码为</td>
				    	<td>查询时间</td>
				    	<td>生产商</td>
				    </tr>
				    <tr>
				    	<td>".$code."</td>
				    	<td>".date('y-m-d h:i:s',time())."</td>
				    	<td>鸢尾花序</td>
				    </tr>
				  </table>
			  </div>
		  </div>";
	echo "最终解释权归鸢尾花序，伪造防伪码者必追究法律责任";
	}
	else{
		echo "<script>alert('注意！这个不是正品!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		// echo "<script>alert('请注意！这个不是正品')</script>";
	}
	close_connection();
	?>
</div>

<?php
include_once("inc/footer.php");
header("Location:fangweima.php");
 ?>