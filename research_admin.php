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

<script type="text/javascript">
function checkContent(){
    var sMobile = document.suggestionform.suggestion_content.value;
    if(sMobile.replace(/(s*$)|[^\u4e00-\u9fa5]/g, "").length ==0){
        alert("你填写的内容不能是空的");
        document.suggestionform.suggestion_content.focus();
        return false;
    }
}
</script>

<div class="container">
	<form action="add_research.php" name="suggestionform" method="post" onSubmit="return checkContent();" enctype="multipart/form-data">
		<div class="form-group">
			<p>制作该问卷调查表，目的为了能够让技术部门更好的为业务部门服务，我们进行了一次问题收集，大家在跟客户沟通过程中客户有很多要求我们没有解决的，现在都可以在这里留言，我们在完成采集后，将会对这些问题给出解决方案，尽最大努力帮助业务部把握每一个客户。请业务部同事给予配合，谢谢。</p>
			<p style="color:red"><i class="glyphicon glyphicon-bullhorn"></i>： 由于系统存在一个小bug，填写完意见后，第一遍提交的时候提示：填写是空的。大家不用担心，直接再次点击提交即可。关于这个小bug，我们将会尽快修复。</p>
			<label>请在以下表格留言 <i class="glyphicon glyphicon-pencil"></i></label>
			<div class="form-group">
			    <textarea class="form-control ckeditor" required="required" id="suggestion_contents" type="text" name="suggestion_content" rows="8" value="<?php echo $suggestion_content?>" placeholder="留言内容"></textarea>
			</div>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile">添加图片：</label>
		    <input type="file" id="exampleInputFile" name="news_file">
		    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
		    <p class="help-block">在这里添加附件，支持的格式有jpg,png等.</p>
		</div>
		<input type="submit" name="" class="btn btn-primary" value="添加"/>
	</form>
</div>


<div class="container">
	<div class="form-group">
		<h2 class="page_title">意见大汇总列表</h2>
		<div class="fangweima_list">
			<ul class="list-group">
				<?php
					get_connection();
					$result_set_14=mysql_query($search_suggestion);
					close_connection();
					if (mysql_num_rows($result_set_14)==0) {
						exit("快成为第一个填写建议的人吧！");
					}
					while ($row=mysql_fetch_array($result_set_14)) {
				 ?>
					  <li class="list-group-item">
					    <span class="badge"><?php echo $row['add_time']?><a href="research_delete.php?suggestion_id=<?php echo $row['suggestion_id']?>" class="right"><i class="glyphicon glyphicon-trash"></i></a></span>
					    <?php echo $row['suggestion_content']?>
					    <p class="research_img"><img src="uploads/<?php echo $row['attachment']?>"></p>
					  </li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>

<?php
include_once("inc/footer.php");
?>