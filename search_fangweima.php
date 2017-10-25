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
	echo "你输入的防伪码为：".$code."<br>";
	echo "这个是正品";
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