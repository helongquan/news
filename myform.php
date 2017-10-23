<?php
include_once("inc/header.php");
    if(isset($_REQUEST['authcode'])) {
        session_start();

        if(strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
            echo "输入正确！";
        } else {
            echo "输入错误！";
        }
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>确认验证码</title>
    </head>
    <body>
        <form method="post" action="myform.php">
             <p>验证码图片：
                <img id="captcha_img" border="1" src="captcha.php?r=<?php echo rand();?>" width=100 height=30>
                <a href="javascript:void(0)" onClick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个？</a>
            </p>
            <p>请输入图片中的内容：<input type="text" name="authcode" value="" /></p>
            <p><input type="submit" value="提交" style="padding:6px 20px;"></p>
        </form>
    </body>
</html>