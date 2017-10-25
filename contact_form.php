<?php
header("Content-type: text/html; charset=utf-8");
    if (is_array($_GET))

	extract($_GET);

    if (is_array($_POST))

	extract($_POST);

	$to=  "791447771@qq.com";

	$subject = "鸢尾花序的新闻管理信息系统";

	$headers = 'From: 鸢尾花序的新闻管理信息系统移动端'. "\r\n" ;

	$headers .= "Content-type: text/html; charset=utf-8\n";

	   $body = "<html>";

	   $body .= "<head>";

	   $body .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

	   $body .= "</head>";

	   $body .= "<body>";

	   $body .= "以下是用户的留言信息:<br>";

	   $body .= '

	    <span>姓名：</span>'.$name.'<br>
		<span>电话：</span>'.$shouji.'<br>
		<span>留言内容：</span>'.$liuyan.'<br>
	   ';

	    $body .= '';

	   $body .= "</body>";

	   $body .= "</html>";

       mail($to, $subject , $body, $headers);

       echo "<script>alert('你的留言已经成功发送!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"
?>