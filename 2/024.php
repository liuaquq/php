<?php
	function compDate($Date_1,$Date_2){
		$Date_List_1=explode("-",$Date_1);
		$Date_List_2=explode("-", $Date_2);
		$d1 = mktime(0,0,0,$Date_List_1[1],$Date_List_1[2],$Date_List_1[0]);
		$d2 = mktime(0,0,0,$Date_List_2[2],$Date_List_2[1],$Date_List_2[0]);
		
		$Days = round(($d1 - $d2)/3600/24);
		return $Days;
	}
?>
<?php 
	$today=date("Y-m-d H:i:s");
	$day = "2017-06-13 00:00:00";
	$days = compDate($day,$today);
	echo "<b>距离伦敦奥运会还有:<font color='red'>".$days."</font>天</b>";
?>