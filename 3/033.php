<?php 
echo "<b>��������˷���</b><br>";
for($i=9;$i>=1;$i--){
	for($j = $i;$j >= 1; $j--){
		echo "$j*$i=".($j*$i)."&nbsp;";
	}
	echo "<br>";
}
?>