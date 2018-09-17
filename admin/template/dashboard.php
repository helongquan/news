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