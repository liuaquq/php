<?php
	$stime=microtime(true);
	echo "��php�ű�����ʱ��:";
	$etime=microtime(true);
	$total = $etime - $stime;
	$str_total = var_export($total,TRUE);
	if(substr_count($str_total, "E")){
		$float_total = floatval(substr($str_total, 5));
		$total = $float_total / 100000;
		echo  "$total".'��';
	}
?>