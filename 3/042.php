<?php
echo "<center><b>�����б�ɫ</b></center>";
echo "<table border='1' width='200px' align='center'>";
for($i = 1; $i <= 5; $i ++) {
	if ($i % 2) {
		echo "<tr><td>1</td><td>2</td><td>3</td></tr>";
		continue;
	}
	echo "<tr bgcolor='red'><td>1</td><td>2</td><td>3</td></tr>";
}
echo "</table>";
?>