<div id="content">
	<center>�������</center>
	<center>
		<form action="#" method="post">
		�������: 	<input type="text" name="title" /><br />
		�׿ո�: <input type="radio" name="trim" value="left" />
		β�ո�: <input type="radio" name="trim" value="right" />
		��β�ո�: <input type="radio" name="trim" value="all" checked/>
		<input type="submit" value="ִ��" id="input" />
		</form>
	</center>
</div>
<div id="center">
<p>
<?php 
if(!empty($_POST['title'])){
	$str = $_POST['title'];
	$check=$_POST['trim'];
	switch ($check){
		case 'all':
			$str_end=trim($str);
			break;
		case 'left':
			$str_end=ltrim($str);
			break;
		case 'right':
			$str_end=rtrim($str);
			break;
	}
	echo 'ԭ�ַ���:'.$str.'<br>';
	echo '����:'.strlen($str).'<br>';
	echo '��ʾ���:'.$str_end.'<br>';
	echo '����: '.strlen($str_end);
}
?>
</p>
</div>