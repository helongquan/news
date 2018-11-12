<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>鸢尾花序</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="./js/holder.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> -->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
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
	      	<li><a href="index.php"><i class="glyphicon glyphicon-home"></i> 前台首页</a></li>
			<li><a href="order.php"><i class="glyphicon glyphicon-shopping-cart"></i> 订单中心</a></li>
			<li><a href="news_list.php"><i class="glyphicon glyphicon-envelope"></i> 新闻中心</a></li>
			<li><a href="wishlist.php"><i class="glyphicon glyphicon-heart"></i> 收藏中心</a></li>
			<li><a href="register.php"><i class="glyphicon glyphicon-list-alt"></i> 注册</a></li>
			<form class="navbar-form navbar-right">
	            <input type="text" class="form-control" placeholder="Search...">
	        </form>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="logout.php"><i class="glyphicon glyphicon-hourglass"></i> 退出</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>



<?php
include_once("./functions/database.php");
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
$search_review="select * from review order by review_id desc";
$search_users_total="select * from users";
$search_fangweima_total="select * from fangweima";
$search_category_total="select * from category";
// 若进行模糊查询，取得模糊查询的关键字keyword
$keyword="";
if (isset($_GET["keyword"])) {
	$keyword=$_GET["keyword"];
	// 构造模糊查询的SQL语句
	$search_sql="select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
}