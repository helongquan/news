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