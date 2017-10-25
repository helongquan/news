<?php
// session_start();
include_once("inc/header.php");
include_once("functions/is_login.php");

if (isset($_GET["login_message"])) {
	if ($_GET["login_message"]=="password_error") {
		echo "密码错误，重新登录！<br/>";
	}elseif ($_GET["login_message"]=="password_right") {
			echo "登录成功！<br/>";
		}
}

if(isset($_REQUEST['authcode'])) {
    session_start();

    if(strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
        echo "输入正确！";
    } else {
        echo "输入错误！";
    }
    exit();
}



if (is_login()) {
		echo "欢迎".$_SESSION['name']."访问系统！<br/>";
		echo "<a href='logout.php'>注销</a>";
		return;
}

$name="";
if (isset($_COOKIE["name"])) {
	$name=$_COOKIE["name"];
}
$password="";
if (isset($_COOKIE["password"])) {
	$password=$_COOKIE["password"];
}
 ?>
<div class="container">
  <form action="login_process.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">用户名：</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo $name?>" placeholder="用户名">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">密码：</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password?>" placeholder="密码">
    </div>
    <div class="form-group">
      <p>验证码图片：
          <img id="captcha_img" border="1" src="captcha.php?r=<?php echo rand();?>" width=100 height=30>
          <a href="javascript:void(0)" onClick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个？</a>
      </p>
      <p>请输入图片中的内容：<input type="text" name="authcode" value="" /></p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="expire" value="3600" checked="checked"> Cookie保存1小时
      </label>
    </div>
    <input type="submit" name="" class="btn btn-default" value="登录"/>
  </form>
</div>

<?php
// 登录成功后，跳转到首页
header("location:index.php");
include_once("inc/footer.php");
 ?>