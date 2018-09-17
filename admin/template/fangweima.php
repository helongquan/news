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