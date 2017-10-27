<?php 
session_start();
include_once("inc/header.php");

$product_id=$_GET["product_id"];
unset($_SESSION["products"][$product_id]);
header("Location:shopping.php");
echo "<script>alert('已经被取消!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
 ?>