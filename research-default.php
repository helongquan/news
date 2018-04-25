<?php
include_once("inc/header.php");
 ?>

<div class="container noprint">
	<form action="add_research-default.php" name="suggestion_noimgform" method="post" onSubmit="return checkContent();" enctype="multipart/form-data">
		<div class="form-group">
			<p>制作该问卷调查表，目的为了能够让技术部门更好的为业务部门服务，我们进行了一次问题收集，大家在跟客户沟通过程中客户有很多要求我们没有解决的，现在都可以在这里留言，我们在完成采集后，将会对这些问题给出解决方案，尽最大努力帮助业务部把握每一个客户。请业务部同事给予配合，谢谢。</p>
			<label>请在以下表格留言 <i class="glyphicon glyphicon-pencil"></i></label>
			<div class="form-group">
			    <textarea class="form-control ckeditor" required="required" id="suggestion_noimg_contents" type="text" name="suggestion_noimg_content" rows="8" value="<?php echo $suggestion_noimg_content?>" placeholder="留言内容"></textarea>
			</div>
		</div>
		<input type="submit" name="" class="btn btn-primary" value="添加"/>
	</form>
</div>

<div class="container">
	<div class="form-group">
		<h2 class="page_title">意见大汇总列表</h2>
		<div class="fangweima_list">
			<ul class="list-group">
				<?php
					get_connection();
					$result_set_15=mysql_query($search_suggestion_noimg);
					close_connection();
					if (mysql_num_rows($result_set_15)==0) {
						exit("快成为第一个填写建议的人吧！");
					}
					while ($row=mysql_fetch_array($result_set_15)) {
				 ?>
					  <li class="list-group-item">
					    <span class="badge"><?php echo $row['add_time']?></span>
					    <?php echo $row['suggestion_noimg_content']?>
					  </li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
	<div class="noprint">
	    <button type="button" class="btn btn-success" id="btnPrint" onclick="javascript:window.print();">打印</button>
	</div>
</div>


<style type="text/css" media=print> 
    .noprint{display:none} 
</style>

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

<div class="noprint">
<?php
include_once("inc/footer.php");
 ?>
</div>