<html>
<body>
	<div style="display: block;margin: 10px auto;background: #C9C4C4;padding: 10px;max-width: 450px;height: 500px;">
	<h3 style="text-align: center;">Unix時間戳轉換成香港時間</h3>
		<hr/>
	    <form method="post" action="">
			請輸入時間戳1：<input type="text" name="unix_time_1"><span id="unix_time_1"></span><br/>
			請輸入時間戳2：<input type="text" name="unix_time_2"><br/>
			請輸入時間戳3：<input type="text" name="unix_time_3"><br/>
			請輸入時間戳4：<input type="text" name="unix_time_4"><br/>
			請輸入時間戳5：<input type="text" name="unix_time_5"><br/>
			請輸入時間戳6：<input type="text" name="unix_time_6"><br/>
			請輸入時間戳7：<input type="text" name="unix_time_7"><br/>
			請輸入時間戳8：<input type="text" name="unix_time_8"><br/>
			請輸入時間戳9：<input type="text" name="unix_time_9"><br/>
			<input type="submit" name="submit" value="轉換">
		</form>
		<?php
		if (empty($_POST['unix_time_1'])){
			echo "";
		}else{
		$unix_time_1=$_POST['unix_time_1'];
		echo "時間戳1---香港時間：".date("Y-m-d H:i:s",$unix_time_1+25200)."<br>";
		}
		if (empty($_POST['unix_time_2'])){
			echo "";
		}else{
			$unix_time_2=$_POST['unix_time_2'];
			echo "時間戳2---香港時間：".date("Y-m-d H:i:s",$unix_time_2+25200)."<br>";
		}
		if (empty($_POST['unix_time_3'])){
			echo "";
		}else{
		$unix_time_3=$_POST['unix_time_3'];
		echo "時間戳3---香港時間：".date("Y-m-d H:i:s",$unix_time_3+25200)."<br>";
		}
		if (empty($_POST['unix_time_4'])){
			echo "";
		}else{
			$unix_time_4=$_POST['unix_time_4'];
			echo "時間戳4---香港時間：".date("Y-m-d H:i:s",$unix_time_4+25200)."<br>";
		}
		if (empty($_POST['unix_time_5'])){
			echo "";
		}else{
		$unix_time_5=$_POST['unix_time_5'];
		echo "時間戳5---香港時間：".date("Y-m-d H:i:s",$unix_time_5+25200)."<br>";
		}
		if (empty($_POST['unix_time_6'])){
			echo "";
		}else{
			$unix_time_6=$_POST['unix_time_6'];
			echo "時間戳6---香港時間：".date("Y-m-d H:i:s",$unix_time_6+25200)."<br>";
		}
		if (empty($_POST['unix_time_7'])){
			echo "";
		}else{
		$unix_time_7=$_POST['unix_time_7'];
		echo "時間戳7---香港時間：".date("Y-m-d H:i:s",$unix_time_7+25200)."<br>";
		}
		if (empty($_POST['unix_time_8'])){
			echo "";
		}else{
			$unix_time_8=$_POST['unix_time_8'];
			echo "時間戳8---香港時間：".date("Y-m-d H:i:s",$unix_time_8+25200)."<br>";
		}
		if (empty($_POST['unix_time_9'])){
			echo "";
		}else{
			$unix_time_9=$_POST['unix_time_9'];
			echo "時間戳9---香港時間：".date("Y-m-d H:i:s",$unix_time_9+25200)."<br>";
		}
		?>
	</div>
</body>
</html>