<?php
	header('Content-type:text/html;Charset=gb2313');
	echo "脚本载人时间: ".date('Y-m-d H:i:s');
	sleep(5);
	echo "<br><br>";
	echo "执行完毕时间: ".date('Y-m-d H:i:s');
?>