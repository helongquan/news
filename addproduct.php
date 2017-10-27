<?php 
session_start();
include_once("inc/header.php");
$product_id=$_GET["product_id"];
$products=$_SESSION["products"];
$products[$product_id]=$product_id;
$_SESSION["products"]=$products;
header("Location:shopping.php");
echo "<script>alert('成功添加商品进购物车');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
 ?>