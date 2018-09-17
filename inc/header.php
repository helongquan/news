<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>鸢尾花序</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vue.min.js"></script>
	<script type="text/javascript" src="js/holder.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="index.php" class="logo"><img src="images/logo.png"></a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li><a href="index.php"><i class="glyphicon glyphicon-home"></i> 首頁</a></li>
	        <li><a href="about.php"><i class="glyphicon glyphicon-book"></i> 關於我們</a></li>
			<li><a href="fangweima.php"><i class="glyphicon glyphicon-barcode"></i> 防伪码</a></li>
			<li><a href="shopping.php"><i class="glyphicon glyphicon-shopping-cart"></i> 商城中心</a></li>
			<li><a href="news_list.php"><i class="glyphicon glyphicon-envelope"></i> 新闻中心</a></li>
			<li><a href="contact.php"><i class="glyphicon glyphicon-earphone"></i> 联系我们</a></li>
	        <li><a href="login.php"><i class="glyphicon glyphicon-user"></i> 登录</a></li>
			<li><a href="logout.php"><i class="glyphicon glyphicon-hourglass"></i> 退出</a></li>
		      <div class="btn-group" role="group">
			    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      问卷调查中心
			      <span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu">
			      <li><a href="research-default.php"><i class="glyphicon glyphicon-edit"></i> 问卷调查简约版</a></li>
			      <li><a href="research.php"><i class="glyphicon glyphicon-edit"></i> 问卷调查完整版</a></li>
			    </ul>
			  </div>
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
$search_sql="select * from news order by news_id desc";
$search_sql_limit_5="select * from news order by news_id desc limit 5";
$search_category_limit_5="select * from category order by category_id desc limit 5";
$search_sql_limit_8="select * from news order by news_id desc limit 8";
$search_sql_all_news="select * from news order by news_id desc";
$search_category="select * from category order by category_id desc";
$search_product_category="select * from productcategory order by productcategory_id desc";
$search_fangweima="select * from fangweima order by fangweima_id desc";
$search_suggestion="select * from suggestion order by suggestion_id desc";
$search_suggestion_noimg="select * from suggestion_noimg order by suggestion_noimg_id desc";
$search_review="select * from review order by review_id desc";
$search_users="select * from users order by user_id desc";
// 若进行模糊查询，取得模糊查询的关键字keyword
$keyword="";
if (isset($_GET["keyword"])) {
	$keyword=$_GET["keyword"];
	// 构造模糊查询的SQL语句
	$search_sql="select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
}