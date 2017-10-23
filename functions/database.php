<?php
header("Content-type: text/html; charset=utf-8");
$database_connection=null;
function get_connection(){
$hostname="qdm179472520.my3w.com";//数据库服务器主机名，可以用IP代替
$database="qdm179472520_db";//数据库名
$username="qdm179472520";//数据库服务器用户名
$password="HGST7105001";//数据库服务器密码
global $database_connection;
// 连接数据库服务器
$database_connection=@mysql_connect($hostname,$username,$password) or die(mysql_error());
mysql_query("set names 'utf8'");//设置字符集
@mysql_select_db($database,$database_connection) or die(mysql_error());
}
function close_connection(){
global $database_connection;
if ($database_connection) {
	mysql_close($database_connection) or die(mysql_error());
}
}
 ?>