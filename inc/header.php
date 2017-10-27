<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哈勃私语</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<!-- <div id="header">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div id="logo">
				<img src="images/logo.png">
			</div>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="mainmenu" id="mainmenu">
				<ul>
					<li><a href="index.php">首頁</a></li>
					<li><a href="#">關於我們</a></li>
					<li><a href="login.php">登录</a></li>
					<li><a href="register.php">注册</a></li>
					<li><a href="logout.php">退出</a></li>
					<li><a href="fangweima.php">防伪码</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div> -->

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="index.php"><img src="images/logo.png"></a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li><a href="index.php">首頁</a></li>
	        <li><a href="about.php">關於我們</a></li>
			<li><a href="fangweima.php">防伪码</a></li>
			<li><a href="shopping.php">商城中心</a></li>
			<li><a href="contact.php">联系我们</a></li>
	        <li><a href="login.php">登录</a></li>
			<li><a href="register.php">注册</a></li>
			<li><a href="logout.php">退出</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="user.php"><i class="glyphicon glyphicon-user"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>



<?php
include_once("functions/database.php");
if (isset($_GET["message"])) {
	echo $_GET["message"]."<br/>";
}
// 限制查询的条数
$search_sql_limit_5="select * from news order by news_id desc limit 5";
$search_sql_limit_8="select * from news order by news_id desc limit 8";
$search_sql_all_news="select * from news order by news_id desc";
$search_category="select * from category order by category_id desc";
$search_fangweima="select * from fangweima order by fangweima_id desc";
$search_review="select * from review order by review_id desc";
// 若进行模糊查询，取得模糊查询的关键字keyword
$keyword="";
if (isset($_GET["keyword"])) {
	$keyword=$_GET["keyword"];
	// 构造模糊查询的SQL语句
	$search_sql="select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
}