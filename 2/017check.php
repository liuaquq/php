<?php
	$pic=$_POST['file'];
	$pics=explode(".", $pic);
	$num = count($pics);
	echo '<br>上传文件的扩展名为:'.$pics[$num-1];
	?>