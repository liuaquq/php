<html>
<head>
<style type="text/css">
.font{
	font-size:150px;
	color:red;
	font_family:Windgings;
}
</style>
</head>
<body>
	<b>�������ͼ��</b>
	<br>
	<br>
	<form action="040.php" method="post">
		<b>����26�������Сд��ĸ</b><br>
		<br> <input type="text" value="" name="str">
		<p>����z��Z����</p>
		<input type="submit" value="���"> <input type="reset" value="����">
	</form>
	<font class="font">12332 &#22; &#23;</font>
</body>
</html>
<?php
$num = 9;
if (! empty ( $_POST ['str'] )) {
	$str = $_POST ['str'];
	do {
		echo "<font class='font'>" . $str . "</font>";
		$num ++;
	} while ( $num < 2 );
}
?>