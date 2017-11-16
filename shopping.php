<?php 
session_start();
include_once("inc/header.php");
 ?>

<div class="container shop">
	
	<form method="get" action="news_list.php">
		  <div class="col-lg-12 nopadding">
		    <div class="input-group">
		      <input type="text" class="form-control" name="keyword" placeholder="请输入关键词" value="<?php echo $keyword;?>">
		      <span class="input-group-btn">
		        <button class="btn btn-primary"  type="submit">搜索</button>
		      </span>
		    </div>
		  </div>
	</form>

	<div class="btn-group btn-group-justified" role="group" aria-label="..." id="btn-group-justified">
	    <a href="add_product.php" class="btn btn-success"><i class="glyphicon glyphicon-paperclip"></i> 添加产品</a>
		<a href="add_product_category.php" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 添加产品分类</a>
		<a href="product_category.php" class="btn btn-info"><i class="glyphicon glyphicon-th"></i> 产品分类中心</a>
	</div>


	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p1.jpg" alt="">
			<h3 class="center">A6694-R系列遥控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=1">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p2.jpg" alt="">
			<h3 class="center">B8399—T系列遥控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=2">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p3.jpg" alt="">
			<h3 class="center">P009—M系列遥控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=3">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p4.jpg" alt="">
			<h3 class="center">H334简易版遥控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=4">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p5.jpg" alt="">
			<h3 class="center">W9083多功能遥控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=5">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p6.jpg" alt="">
			<h3 class="center">Q883—N系列</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=6">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p7.jpg" alt="">
			<h3 class="center">BBE67黑色筛网</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=7">加入购物车</a></h2>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<img src="images/p8.jpg" alt="">
			<h3 class="center">高清摄像头监控器</h3>
			<h2 class="center"><a class="add_to_cart" href="addproduct.php?product_id=8">加入购物车</a></h2>
		</div>
	</div>
	 <hr>


	<?php 
	if (empty($_SESSION["products"])) {
		echo "<div class='container tips'></div>";
		echo "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>亲!</strong> 你购物车里面还是空的，请选择自己喜欢的商品吧.</div>";
	}else{
		echo "<div class='container'>你所购买的商品有：</div><br/>";
		$products=$_SESSION["products"];
		foreach ($products as $key => $value) {
			echo "<div class='col-xs-6 col-sm-6 col-md-4 col-lg-4 padding_no'><p class='emeg'>商品$value<a href='cancelproduct.php?product_id=$key'><span class='right'><i class='glyphicon glyphicon-trash'></i></span></a></p></div>";
		}
	}
	?>

</div>

<?php
include_once("inc/footer.php");
  ?>