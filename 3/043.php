<form method="post" action="043.php">
	<b>�����������ż����</b><br>
	<br> ����:<input type="text" value="" name="num"><br>
	<br> <input type="submit" value="����"> <input type="reset" value="����">
</form>
<?php
if (! empty ( $_POST ['num'] )) {
	count_num ( $_POST ['num'] );
}
function count_num($num_end = 10) {
	$sum = 0;
	$num = 0;
	for($i = 0;; $i ++) {
		if ($num > $num_end) {
			break;
		}
		if ($i % 2 == 0) {
			$num ++;
			$sum += $i;
		}
	}
	echo "<script>alert('ǰ".($num-1)."��ż����Ϊ: ".$sum."')</script>";
}

?>