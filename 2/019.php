<form method="post" action="019.php">
ѡ�����ӷ�ʽ:
	<br>
	<select name="host">
		<option value="localhost" selected>localhost
		<option value="127.0.0.1">127.0.0.1
	</select>
	<br><br>
	�û���:<input type="text" value="" name="user"><br>
	<br>
	��&nbsp;&nbsp;��:<input type="password" value="" name="pwd"><br>
	<br>
	<input type="submit" value="����">
	<input type="reset" value="����">
</form>
<?php 
	if(isset($_POST['host'])){
		$conn = mysql_connect($_POST['host'],$_POST['user'],$_POST['pwd']) or 
		die("���ݿ�   ����ʧ��");
		if($conn){
			echo "<script>alert('���ݿ����ӳɹ�!')</script>";
		}
	}
?>