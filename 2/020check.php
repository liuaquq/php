<?php
	$conn = mysql_connect("localhost", "root", "123456");
	$database = $_POST['database'];
	if(isset($_POST['database'])){
		if($database =="0"){
			echo "<script>alert('û��ѡ���κ����ݿ�!');</script>";
		}else{
			mysql_select_db($database);
			echo "<script>alert('ѡ��".$database."���ݿ�ѡ��ɹ�!');</script>";
		}
	}
?>