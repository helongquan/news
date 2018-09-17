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