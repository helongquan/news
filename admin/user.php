<?php
session_start();
include_once("/inc/header-admin.php");
include_once("/functions/is_login.php");
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


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar noprint">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="#gailan">概览 <span class="sr-only">(current)</span></a></li>
        <li><a href="#baogao">报告</a></li>
        <li><a href="#fenxi">分析</a></li>
        <li><a href="#daochu">导出</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="#order">我的订单</a></li>
        <li><a href="#shoucang">我的收藏</a></li>
        <li><a href="#pinglun">我的评论</a></li>
        <li><a href="#xinwen">我的新闻</a></li>
        <li><a href="#haoyou">我的好友</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="#jifen">积分中心</a></li>
        <li><a href="#setting">个人设置</a></li>
        <li><a href="#zhaohuimima">找回密码</a></li>
        <li><a href="#products">我的产品</a></li>
        <li><a href="#fangweima">防伪码管理</a></li>
        <li><a href="#wenzhangfenlei">文章分类</li>
        <li><a href="#" id="btnPrint" onclick="javascript:window.print();">打印内容</li>
      </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">用户中心</h1>

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="#users"><i class="glyphicon glyphicon-cog"></i></a>
          <h4>用户数量</h4>
          <span class="text-muted"><?php echo mysql_num_rows($search_users_total_result);?></span>个
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="#order"><i class="glyphicon glyphicon-shopping-cart"></i></a>
          <h4>我的订单</h4>
          <span class="text-muted">1</span>条
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="#xinwen"><i class="glyphicon glyphicon-file"></i></a>
          <h4>我的文章</h4>
          <span class="text-muted"><?php echo mysql_num_rows($search_news_total_result);?></span>篇
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <a href="#pinglun"><i class="glyphicon glyphicon-comment"></i></a>
          <h4>我的评论</h4>
          <span class="text-muted"><?php echo mysql_num_rows($search_review_total);?></span>条
        </div>
      </div>

      <h2 class="sub-header" id="gailan">我的踪迹</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="baogao">我的报告</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="fenxi">我的分析</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="daochu">数据导出</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="order">我的订单</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="shoucang">我的收藏</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="pinglun">我的评论</h2>
      <ul class="list-group">
  
      <?php
            get_connection();
            $page_size=1;
            if (isset($_GET["page_current"])) {
              $page_current=$_GET["page_current"];
              }else{
                $page_current=1;
              }
              $start=($page_current-1)*$page_size;
              $result_sql="select * from news order by news_id desc limit $start,$page_size";
              if (isset($_GET["keyword"])) {
                $keyword=$_GET["keyword"];
                // 构造模糊查询新闻的SQL语句
                $result_sql="select * from news where title like '%keyword%' or content like '%keyword%' order by news_id desc limit $start,$page_size";
              }
            $result_set=mysql_query($search_review);
            // $length = mysql_field_len($result_set, 10);
            close_connection();
            if (mysql_num_rows($result_set)==0) {
              exit("暂无记录！");
            }
            while ($row=mysql_fetch_array($result_set)) {
           ?>

            <li class="list-group-item"><?php echo $row['review_content']?></li>

          <?php
        }
           ?>
      </ul>
      

      <h2 class="sub-header" id="xinwen">我的新闻</h2>
      
 
  
      <?php
            get_connection();
            $page_size=1;
            if (isset($_GET["page_current"])) {
              $page_current=$_GET["page_current"];
              }else{
                $page_current=1;
              }
              $start=($page_current-1)*$page_size;
              $result_sql="select * from news order by news_id desc limit $start,$page_size";
              if (isset($_GET["keyword"])) {
                $keyword=$_GET["keyword"];
                // 构造模糊查询新闻的SQL语句
                $result_sql="select * from news where title like '%keyword%' or content like '%keyword%' order by news_id desc limit $start,$page_size";
              }
            $result_set=mysql_query($search_sql);
            // $length = mysql_field_len($result_set, 10);
            close_connection();
            if (mysql_num_rows($result_set)==0) {
              exit("暂无记录！");
            }
            while ($row=mysql_fetch_array($result_set)) {
           ?>

            

            <div class="news_lis news_admin">
               <div class="media-left">
                  <a href="news_detail.php?news_id=<?php echo $row['news_id']?>">
                    <img class="media-object" src="uploads/<?php echo $row['attachment']?>" alt="<?php echo $row['news_id']?>">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></h4>
                  <div class="index_content">
                    <p><a href="news_edit.php?news_id=<?php echo $row['news_id']?>">编辑</a>&nbsp;&nbsp;<a href="news_delete.php?news_id=<?php echo $row['news_id']?>">删除</a></p>
                  </div>
                </div>
              </div>

          <?php
        }
           ?>


      <h2 class="sub-header" id="haoyou">我的好友</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>好友名称</th>
              <th>手机号码</th>
              <th>电子邮箱</th>
              <th>居住地址</th>
            </tr>
          </thead>
          <tbody>
            <?php
              get_connection();
              $result_set=mysql_query($search_users_total);
              close_connection();
              if (mysql_num_rows($result_set)==0) {
                exit("暂无记录！");
              }
              while ($rows=mysql_fetch_array($result_set)) {
             ?>
            <tr>
              <td><?php echo $rows['name']?></td>
              <td><?php echo $rows['telephone']?></td>
              <td><?php echo $rows['email']?></td>
              <td><?php echo $rows['address']?></td>
            </tr>
            <?php
            }
             ?>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="jifen">积分中心</h2>
      <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">用户积分中心</div>
        <div class="panel-body">
          <p>用户积分可以用于购买有偿服务和购买商城中的产品，也可以进行提现，具体的规则请参考以下的内容。</p>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>规则</th>
              <th>用户等级</th>
              <th>提现金额</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>0-500</td>
              <td>普通用户</td>
              <td>0</td>
            </tr>
            <tr>
              <td>501-2000</td>
              <td>铜牌用户</td>
              <td>1元/100分</td>
            </tr>
            <tr>
              <td>2001-4000</td>
              <td>银牌用户</td>
              <td>1.1元/100分</td>
            </tr>
            <tr>
              <td>4001-8000</td>
              <td>金牌用户</td>
              <td>1.2元/100分</td>
            </tr>
            <tr>
              <td>8001-16000</td>
              <td>铂金牌用户</td>
              <td>1.3元/100分</td>
            </tr>
            <tr>
              <td>16001-40000</td>
              <td>vip用户</td>
              <td>赠送2件商品</td>
            </tr>
            <tr>
              <td>40001以上</td>
              <td>svip用户</td>
              <td>赠送5件商品</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="setting">个人设置</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="zhaohuimima">找回密码</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>用户名</th>
              <th>昵称</th>
              <th>手机号</th>
              <th>站点</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="products">我的产品</h2>
      
      <ul class="list-group">
  
      <?php
            get_connection();
            $page_size=1;
            if (isset($_GET["page_current"])) {
              $page_current=$_GET["page_current"];
              }else{
                $page_current=1;
              }
              $start=($page_current-1)*$page_size;
              $result_sql="select * from news order by news_id desc limit $start,$page_size";
              if (isset($_GET["keyword"])) {
                $keyword=$_GET["keyword"];
                // 构造模糊查询新闻的SQL语句
                $result_sql="select * from news where title like '%keyword%' or content like '%keyword%' order by news_id desc limit $start,$page_size";
              }
            $result_set=mysql_query($search_sql);
            // $length = mysql_field_len($result_set, 10);
            close_connection();
            if (mysql_num_rows($result_set)==0) {
              exit("暂无记录！");
            }
            while ($row=mysql_fetch_array($result_set)) {
           ?>

            <li class="list-group-item"><a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></li>

          <?php
        }
           ?>
      </ul>

      <h2 class="sub-header" id="fangweima">防伪码管理</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>编号</th>
              <th>防伪码</th>
              <th>添加时间</th>
            </tr>
          </thead>
          <tbody>
            <?php
              get_connection();
              $result_set=mysql_query($search_fangweima_total);
              close_connection();
              if (mysql_num_rows($result_set)==0) {
                exit("暂无记录！");
              }
              while ($rows=mysql_fetch_array($result_set)) {
             ?>
            <tr>
              <td><?php echo $rows['fangweima_id']?></td>
              <td><?php echo $rows['code']?></td>
              <td><?php echo $rows['publish_time']?></td>
            </tr>
            <?php
            }
             ?>
          </tbody>
        </table>
      </div>

      <h2 class="sub-header" id="wenzhangfenlei">文章分类</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>分类编号</th>
              <th>文章分类名</th>
            </tr>
          </thead>
          <tbody>
            <?php
              get_connection();
              $result_set=mysql_query($search_category_total);
              close_connection();
              if (mysql_num_rows($result_set)==0) {
                exit("暂无记录！");
              }
              while ($categoryss=mysql_fetch_array($result_set)) {
             ?>
            <tr>
              <td><?php echo $categoryss['category_id']?></td>
              <td><?php echo $categoryss['name']?></td>
            </tr>
            <?php
            }
             ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>


<?php
include_once("inc/footer-admin.php");
 ?>