<?php
// session_start();
include_once("inc/header.php");
?>

<!--通过javascript验证手机号 开始-->
<script type="text/javascript">
function checkMobile(){
    var sMobile = document.mobileform.shouji.value;
    if(!(/^1[3|5][0-9]\d{4,8}$/.test(sMobile))){
        alert("不是完整的11位手机号或者正确的手机号前七位");
        document.mobileform.shouji.focus();
        return false;
    }
}
</script>
<!--通过javascript验证手机号 结束-->

<div class="container">
	<form method="post" name="mobileform" action="contact_form.php" onSubmit="return checkMobile();">
	  <div class="form-group">
	    <label for="exampleInputEmail1">姓名：</label>
	    <input type="text" class="form-control" name="name" value="<?php echo $name?>" placeholder="姓名" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">手机：</label>
	    <input type="text" name="shouji" class="form-control" value="<?php echo $shouji?>" placeholder="手机" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">留言内容：</label>
	    <textarea class="form-control" type="text" name="liuyan" rows="3" value="<?php echo $liuyan?>" placeholder="留言内容"></textarea>
	  </div>
	  <div class="form-group">
	    <p>验证码图片：
	        <img id="captcha_img" border="1" src="captcha.php?r=<?php echo rand();?>" width=100 height=30>
	        <a href="javascript:void(0)" onClick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个？</a>
	    </p>
	    <p>请输入图片中的内容：<input type="text" name="authcode" value="" /></p>
	  </div>
	  <input type="submit" name="" class="btn btn-default" value="发送"/>
	</form>
</div>



<?php
include_once("inc/footer.php");
?>

