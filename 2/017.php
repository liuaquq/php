<form action="017.php" method="post">
	检测文件名后缀名<br>
	<input type="file" value="" name="file"><br>
	<input type="submit" value="检测">
</form>
<?php
	$pic=$_POST['file'];
	$pics=explode(".", $pic);
	$num = count($pics);
	echo '<br>上传文件的扩展名为:'.$pics[$num-1];
	?>