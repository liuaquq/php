<form method="post" action="019.php">
选择连接方式:
	<br>
	<select name="host">
		<option value="localhost" selected>localhost
		<option value="127.0.0.1">127.0.0.1
	</select>
	<br><br>
	用户名:<input type="text" value="" name="user"><br>
	<br>
	密&nbsp;&nbsp;码:<input type="password" value="" name="pwd"><br>
	<br>
	<input type="submit" value="连接">
	<input type="reset" value="重置">
</form>
<?php 
	if(isset($_POST['host'])){
		$conn = mysql_connect($_POST['host'],$_POST['user'],$_POST['pwd']) or 
		die("数据库   连接失败");
		if($conn){
			echo "<script>alert('数据库连接成功!')</script>";
		}
	}
?>