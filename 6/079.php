<div id="content">
	<center>�����ַ�������</center>
	<center>
		<form action="#" method="post">
			<input type="text" value="hello" name="word" />
			<br />
			<b>��Сд��ĸ</b>
			<br />
			<input type="submit" value="tij" name="sel" id="input" />
		</form>
	</center>
</div>
<div>
<?php 
if(!empty($_POST['word'])){
	$str = $_POST['word'];
	$num =  str_word_count($str);
	echo  "��������:".$num;
}
?>
</div>