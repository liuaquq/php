<div id="content">
<center>�������ַ����ĳ���</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="length" size="10" /><br />
		<input type="submit" value="����" id="input" />
	</form>
	<center>��ʾ;���볤�Ȳ��ܴ���10</center>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['length'])){
	function str_random($length){
		$chars=
		'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$str='';
		for($i=0;$i<$length;$i++){
			$str.=$chars[mt_rand(0, strlen($chars)-1)];
		}
		return $str;
	}
	echo str_random($_POST['length']);
}
?>
</center>
</div>