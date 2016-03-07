<?php
	$stime=microtime(true);
	echo "本php脚本运行时间:";
	$etime=microtime(true);
	$total = $etime - $stime;
	$str_total = var_export($total,TRUE);
	if(substr_count($str_total, "E")){
		$float_total = floatval(substr($str_total, 5));
		$total = $float_total / 100000;
		echo  "$total".'秒';
	}
?>