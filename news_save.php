<?php
	include_once("inc/header.php");
 ?>
<?php
include_once("functions/file_system.php");
if (empty($_POST)) {
	$message="上传的文件超过了php.ini中post_max_size选项限制的值";
}
else{
	$user_id=1;
	$category_id=$_POST["category_id"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$currentDate= date("Y-m-d H:i:s");
	$unix_time=strtotime($currentDate);
	$clicked=0;
	$file_name=$_FILES["news_file"]["name"];
	$message=upload($_FILES["news_file"],"uploads");
	$sql="insert into news values(null,$user_id,$category_id,'$title','$content','$currentDate','$unix_time',$clicked,'$file_name')";
	if ($message=="文件上传成功！"||$message=="没有选择上传附件！") {
		include_once("functions/database.php");
		get_connection();
		mysql_query($sql);
		close_connection();
	}
};
echo "<script>alert('新闻发布成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
header("location:news_list.php");
 ?>

<?php
	include_once("inc/footer.php");
 ?>