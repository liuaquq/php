<div id="content">
<center>请输入字符串的长度</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="length" size="10" /><br />
		<input type="submit" value="生成" id="input" />
	</form>
	<center>提示;输入长度不能大于10</center>
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