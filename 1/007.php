<?php
	$str="0123456789abcdefghijklmnopqrstuvwxyz";
	$s="";
	$n=8;
	$len = strlen($str)-1;
	for($i=0;$i<$n;$i++){
		$s .=$str[rand(0,$len)];
		
	}
	echo $s . "<br/>";
?>