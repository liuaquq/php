<div id="content">
<center>�������ѯ�ؼ���:</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="str" size="10" /><br />
		<input type="submit" value="����" id="input" />
	</form>
	<center>��ʾ;���볤�Ȳ��ܴ���10
	<?php echo $text=file_get_contents('news.txt');?>
	</center>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['str'])){
	$str= $_POST['str'];
	echo '�ؼ��ֳ��ִ���: '.substr_count($text, $str)."��";

}
?>
</center>
</div>
