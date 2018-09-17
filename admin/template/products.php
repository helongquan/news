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