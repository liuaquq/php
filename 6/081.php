<center>
	<form action="#" method="post">
	�ַ���: <input type="text" name="rept" /><br />
	��&nbsp;&nbsp;��: <input type="text" name="num" size="10" /><br />
	<input type="submit" value="���" id="input" name="sel" />
	</form>
</center>
<div id="center">
	<center>
	<?php 
if(!empty($_POST['rept'])){
	$str = '�ظ����:'.$_POST['rept'].'<br>';
	$num = $_POST['num'];
	$str_show=str_repeat($str, $num);
	echo $str_show;
}	
	?>
	</center>
</div>