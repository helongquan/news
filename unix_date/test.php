<html>
	<body>
	<!-- action内容为空或为自身文件 -->
	    <form method="POST" action="">
	        用户名:<input type="text" name="name" size="10">
	        密码:<input type="text" name="ps" size="10">
	        <input type="submit" name="login" value="登录">
	    </form>
		<?php
	        if (isset($_POST['login'])) {
	            $user=$_POST["name"];
	            $pwd=$_POST["ps"];
	            echo "用户名是：".$user;
	            echo "<br />密码是：".$pwd;
	        }
	    ?>
	</body>
</html>