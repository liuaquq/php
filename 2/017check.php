<?php
	$pic=$_POST['file'];
	$pics=explode(".", $pic);
	$num = count($pics);
	echo '<br>�ϴ��ļ�����չ��Ϊ:'.$pics[$num-1];
	?>