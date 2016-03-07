<?php
	$urlar=parse_url($_SERVER['HTTP_REFERER']);
	print("<pre>");
	print_r($urlar);
	print_r($_SERVER['HTTP_REFERER']);
	if($urlar['host']!="localhost"){
		echo "页面失效";
		echo "<script>alert('连接失效');location='index.php';</script>";
		exit;
	}
	echo  "可以正常访问页面";
	?>