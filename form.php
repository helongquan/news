<?php
// session_start();
include_once("inc/header.php");
include_once("functions/is_login.php");
?>

<form action="login_process.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">用户名：</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo $name?>" placeholder="用户名">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密码：</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password?>" placeholder="密码">
  </div>

<div id="check">
<input type="text" name="userpwd" class="check" value="验证码" size="10">
<img src="checkcode.php" id="img" width="80" height="20" onclick="this.src='checkcode.php?time='+new Date().getTime();">
</div>


  <div class="checkbox">
    <label>
      <input type="checkbox" name="expire" value="3600" checked="checked"> Cookie保存1小时
    </label>
  </div>
  <input type="submit" name="" class="btn btn-default" value="登录"/>
</form>