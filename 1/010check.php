<?php
	$urlar=parse_url($_SERVER['HTTP_REFERER']);
	print("<pre>");
	print_r($urlar);
	print_r($_SERVER['HTTP_REFERER']);
	if($urlar['host']!="localhost"){
		echo "ҳ��ʧЧ";
		echo "<script>alert('����ʧЧ');location='index.php';</script>";
		exit;
	}
	echo  "������������ҳ��";
	?>