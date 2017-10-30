<?php 
session_start();
include_once("inc/header.php");
 ?>

<div class="container shop">
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p1.jpg" alt="">
		<h3 class="center">A6694-R系列遥控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=1">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p2.jpg" alt="">
		<h3 class="center">B8399—T系列遥控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=2">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p3.jpg" alt="">
		<h3 class="center">P009—M系列遥控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=3">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p4.jpg" alt="">
		<h3 class="center">H334简易版遥控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=4">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p5.jpg" alt="">
		<h3 class="center">W9083多功能遥控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=5">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p6.jpg" alt="">
		<h3 class="center">Q883—N系列</h3>
		<h2 class="center"><a href="addproduct.php?product_id=6">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p7.jpg" alt="">
		<h3 class="center">BBE67黑色筛网</h3>
		<h2 class="center"><a href="addproduct.php?product_id=7">添加到购物车</a></h2>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<img src="images/p8.jpg" alt="">
		<h3 class="center">高清摄像头监控器</h3>
		<h2 class="center"><a href="addproduct.php?product_id=8">添加到购物车</a></h2>
	</div>
	 <hr>


	<?php 
	if (empty($_SESSION["products"])) {
		echo "你暂时没有购买商品<br/>";
	}else{
		echo "你所购买的商品有：<br/>";
		$products=$_SESSION["products"];
		foreach ($products as $key => $value) {
			echo "商品$value<a href='cancelproduct.php?product_id=$key'>取消购买</a><br/>";
		}
	}
	?>

</div>

<?php
include_once("inc/footer.php");
  ?>