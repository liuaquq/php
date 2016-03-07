<b>数据库选择列表</b><br>
<form action="020check.php" method="post">
	<select name="database" size="10">
		<option value="0" selected>请选择</option>
		<?php 
			$conn = mysql_connect("localhost","root","123456");
			mysql_query("set character_set_connection=gb2312,character_set_results=gb2312,character_set_client=gb2312");
			$re = mysql_query("show databases");
			while($arr = mysql_fetch_assoc($re)){ ?>
			<option value="<?echo $arr['Database'];?>"><?echo $arr['Database']."<br>";?>
			</option>
			<?
			}
			?>
			

	</select>
	<input type="submit" value="选择">
</form>