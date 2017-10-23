<?php
include_once("inc/header.php");
 ?>
<form action="add_user.php" method="post">
	<h2 class="page_title">用户注册页面</h2>
	<div class="form-group">
		<label>用户名：</label>
		<input type="text" class="form-control" name="name" value="<?php echo $name?>" placeholder="用户名">
	</div>
	<div class="form-group">
		<label>密码：</label>
		<input type="password" name="password" class="form-control" value="<?php echo $password?>" placeholder="密码">
	</div>
	<div class="form-group">
	    <p>验证码图片：
	        <img id="captcha_img" border="1" src="captcha.php?r=<?php echo rand();?>" width=100 height=30>
	        <a href="javascript:void(0)" onClick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个？</a>
	    </p>
	    <p>请输入图片中的内容：<input type="text" name="authcode" value="" /></p>
	</div>
	<input type="submit" name="" class="btn btn-default" value="提交"/>
</form>

<?php
include_once("inc/footer.php");
 ?>