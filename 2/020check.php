<?php
	$conn = mysql_connect("localhost", "root", "123456");
	$database = $_POST['database'];
	if(isset($_POST['database'])){
		if($database =="0"){
			echo "<script>alert('没有选择任何数据库!');</script>";
		}else{
			mysql_select_db($database);
			echo "<script>alert('选择".$database."数据库选择成功!');</script>";
		}
	}
?>