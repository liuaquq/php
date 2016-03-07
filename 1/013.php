<?php
	date_default_timezone_set('PRC');
	echo "中国北京当地时间: ";
	echo date("y-m-d h:i:s")."<br>";
	date_default_timezone_set('America/New_York');
	echo "美国纽约当地时间: ";
	echo date("y-m-d h:i:s");
?>