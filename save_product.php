<?php
	include_once("inc/header.php");
 ?>
<?php
include_once("functions/file_system.php");
if (empty($_POST)) {
	$message="上传的文件超过了php.ini中post_max_size选项限制的值";
}
else{
	$product_id=1;
	$productcategory_id=$_POST["productcategory_id"];
	$product_title=$_POST["product_title"];
	$product_content=$_POST["product_content"];
	$product_price=$_POST['product_price'];
	$quantity=$_POST['quantity'];
	$color=$_POST['color'];
	$weight=$_POST['weight'];
	$brand=$_POST['brand'];
	$inch=$_POST['inch'];
	$currentDate= date("Y-m-d H:i:s");
	$unix_time=strtotime($currentDate);
	$clicked=0;
	$file_name=$_FILES["news_file"]["name"];
	$message=upload($_FILES["news_file"],"uploads");
	$sql="insert into product values(null,$product_id,$productcategory_id,'$product_title','$product_content','$product_price','$quantity',$color,'$weight','$brand','inch','currentDate','unix_time','$clicked','$file_name')";
	if ($message=="文件上传成功！"||$message=="没有选择上传附件！") {
		include_once("functions/database.php");
		get_connection();
		mysql_query($sql);
		close_connection();
	}
};
echo "<script>alert('产品发布成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
header("location:shopping.php");
 ?>

<?php
	include_once("inc/footer.php");
 ?>