<?php
$conn=mysql_connect("localhost","root","123456") or die("<b>状态<b>: 连接MySQL数据库失败!<br>错误信息: ".mysql_error());
if($conn){
	echo "<script>alert('MySQL连接成功');</script>";
	$db=mysql_select_db("demo");
	if($db==1){
		echo "<script>alert('数据库选择成功');</script>";
		mysql_query("set names gbk");
	}else{
		echo "<script>alert('数据库不存在');</script>";
	}
}
