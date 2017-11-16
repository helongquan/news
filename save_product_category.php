<?php
header("Content-type: text/html; charset=utf-8");
include_once("inc/header.php");
// include_once("functions/database.php");
$name=$_POST["name"];
$productcategory_id=$_POST[""];
get_connection();
$sql="insert into productcategory values('$productcategory_id','$name')";
$result_set=mysql_query($sql);
echo "<script>alert('产品分类提交成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
echo "<h2 class='center'>产品分类提交成功！</h2>";
close_connection();
?>


<?php
// header("Location:add_category.php");
include_once("inc/footer.php");
 ?>