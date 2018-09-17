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