<?php
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$birthday = mktime(0,0,0,$month,$day,$year);
	$nowUNIX=time();
	$age = $nowUNIX - $birthday;
	$age = floor($age / (365*24*60*60));
	echo "<script>alert('ÄúµÄÄêÁäÎª:".$age."')</script>";
	?>