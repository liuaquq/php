<div id="content">
<center>����������:</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="num" size="10" /><br />
		<input type="submit" value="����" id="input" />
	</form>
	<center>��ʾ;���볤�Ȳ��ܴ���10</center>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['num'])){
	$num= $_POST['num'];
	echo '��ʽ����: '.number_format($num);

}
?>
</center>
</div>
