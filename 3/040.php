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
	<b>输出字体图形</b>
	<br>
	<br>
	<form action="040.php" method="post">
		<b>输入26个任意大小写字母</b><br>
		<br> <input type="text" value="" name="str">
		<p>输入z或Z结束</p>
		<input type="submit" value="输出"> <input type="reset" value="重置">
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