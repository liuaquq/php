<form action="017.php" method="post">
	����ļ�����׺��<br>
	<input type="file" value="" name="file"><br>
	<input type="submit" value="���">
</form>
<?php
	$pic=$_POST['file'];
	$pics=explode(".", $pic);
	$num = count($pics);
	echo '<br>�ϴ��ļ�����չ��Ϊ:'.$pics[$num-1];
	?>