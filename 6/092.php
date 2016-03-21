<div id="content">
<center>请输入数字:</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="num" size="10" /><br />
		<input type="submit" value="生成" id="input" />
	</form>
	<center>提示;输入长度不能大于10</center>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['num'])){
	$num= $_POST['num'];
	echo '格式化后: '.number_format($num);

}
?>
</center>
</div>
