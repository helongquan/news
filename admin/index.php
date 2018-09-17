<?php
session_start();
include_once("inc/header-admin.php");
include_once("functions/is_login.php");
if (!is_login()) {
  echo "<div class='container' style='margin:20px auto'>";
  echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>嘿!</strong> 请你登录系统后，再访问该页面！</div>";
  echo "<a href='login.php' class='btn btn-primary'>登录</a>";
  echo "</div>";
  include_once("inc/footer-admin.php");
  return;
}
 ?>


<?php
  get_connection();
  $search_users_total_result=mysql_query($search_users_total);
  $search_news_total_result=mysql_query($search_sql);
  $search_review_total=mysql_query($search_review);
  $search_fangweima_total_result=mysql_query($search_fangweima_total);
  $search_category_total_result=mysql_query($search_category_total);
  // $search_users_total_result=mysql_num_rows($search_users_total);
  close_connection();
?>

<script>
  // 打印控制代码 开始
  function preview(oper) {
      if (oper < 10)
      {
      bdhtml=window.document.body.innerHTML;//获取当前页的html代码 
      sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域 
      eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域 
      prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html 

      prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html 
      window.document.body.innerHTML=prnhtml;
      window.print();
      window.document.body.innerHTML=bdhtml;
      } else {
      window.print();
      }
  }
  // 打印控制代码 结束
</script>


<div class="container-fluid" id="main">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar noprint">
      <?php include_once("template/admin_sidebar.php"); ?>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2 class="page-header" id="dashboard">用户中心</h2>
      <?php include_once("template/dashboard.php"); ?>

      <h2 class="sub-header" id="gailan">我的踪迹</h2>
      <?php include_once("template/gailan.php"); ?>

      <h2 class="sub-header" id="baogao">我的报告</h2>
      <?php include_once("template/baogao.php"); ?>

      <h2 class="sub-header" id="fenxi">我的分析</h2>
      <?php include_once("template/fenxi.php"); ?>

      <h2 class="sub-header" id="daochu">数据导出</h2>
      <?php include_once("template/daochu.php"); ?>

      <h2 class="sub-header" id="order">我的订单</h2>
      <?php include_once("template/order.php"); ?>

      <h2 class="sub-header" id="shoucang">我的收藏</h2>
      <?php include_once("template/shoucang.php"); ?>

      <h2 class="sub-header" id="pinglun">我的评论</h2>
      <?php include_once("template/pinglun.php"); ?>

      <h2 class="sub-header" id="xinwen">我的新闻</h2>
      <?php include_once("template/xinwen.php"); ?>

      <h2 class="sub-header" id="haoyou">我的好友</h2>
      <?php include_once("template/haoyou.php"); ?>

      <h2 class="sub-header" id="jifen">积分中心</h2>
      <?php include_once("template/jifen.php"); ?>

      <h2 class="sub-header" id="setting">个人设置</h2>
      <?php include_once("template/setting.php"); ?>

      <h2 class="sub-header" id="zhaohuimima">找回密码</h2>
      <?php include_once("template/zhaohuimima.php"); ?>

      <h2 class="sub-header" id="products">我的产品</h2>
      <?php include_once("template/products.php"); ?>

      <h2 class="sub-header" id="fangweima">防伪码管理</h2>
      <?php include_once("template/fangweima.php"); ?>

      <h2 class="sub-header" id="wenzhangfenlei">文章分类</h2>
      <?php include_once("template/wenzhangfenlei.php"); ?>

    </div>
    <div class="admin_scroll">
      <p class="scroll_top"><i class="glyphicon glyphicon-menu-up"></i></p>
      <p class="scroll_bottom"><i class="glyphicon glyphicon-menu-down"></i></p>
    </div>
  </div>
</div>


<?php
include_once("inc/footer-admin.php");
 ?>