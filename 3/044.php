<?php
$conn=mysql_connect("localhost","root","123456") or die("<b>״̬<b>: ����MySQL���ݿ�ʧ��!<br>������Ϣ: ".mysql_error());
if($conn){
	echo "<script>alert('MySQL���ӳɹ�');</script>";
	$db=mysql_select_db("demo");
	if($db==1){
		echo "<script>alert('���ݿ�ѡ��ɹ�');</script>";
		mysql_query("set names gbk");
	}else{
		echo "<script>alert('���ݿⲻ����');</script>";
	}
}
