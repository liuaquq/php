<?php
date_default_timezone_set ( "Asia/Shanghai" );
$today = time ();
$year = @$_GET ['year'];
$month = @$_GET ['month'];
if ($year == '') {
	$year = date ( "Y", $today );
}
if ($month == '') {
	$month == date ( 'm', $today );
}
if (( int ) $month == 0) {
	$year -= 1;
	$month = 12;
}
$time = mktime ( 0, 0, 0, $month, 1, $year );
$year = date ( 'Y', $time );
$month = date ( 'm', $time );
$days = date ( 't', $time );
$fstdw = date ( 'N', $time );

echo "<table border=1 width=260 cellspacing=0 cellpadding=0 align=center bgcolor=#cccccc>";
echo "<tr><td colspan=7 class=title>";
$str = "<a href=?year=" . ($year - 1) . "&month=" . $month . ">";
$str .= "(-</a>" . $year . "��";
$str .= "<a href=?year=" . ($year + 1) . "&month=" . $month . ">";
$str .= "-)</a>";
$str .= "<a href=?year=" . $year . "&month=" . ($month - 1) . ">";
$str .= "(-</a>" . $month . "��";
$str .= "<a href=?year=" . $year . "&month=" . ($month + 1) . ">";
$str .= "-)</a>";
echo $str;
echo "<td></tr>";
echo "<tr>";
$str = "<td>һ</td>";
$str .= "<td>��</td>";
$str .= "<td>��</td>";
$str .= "<td>��</td>";
$str .= "<td>��</td>";
$str .= "<td>��</td>";
$str .= "<td>��</td>";
echo $str;
echo "</td>";
?>
<?php

$rows = ceil ( ($days + $fstdw - 1) / 7 );
$cd = 1;
for($i = 0; $i < $rows; $i ++) {
	echo "<tr>";
	for($j = 0; $j < 7; $j ++) {
		echo "<td>";
		if ($cd >= $fstdw && $cd < $days + $fstdw) {
			$today=$cd-$fstdw+1;
			if($today == date('d',time())){
				echo "<font color='red'><b><u>";
			}
				echo $today;
		}else{
				echo ".";
		}
		$cd++;
		echo "</td>";
	}
		echo "</tr>";
}
echo "</table>";
?>