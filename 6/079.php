<div id="content">
	<center>计算字符串数量</center>
	<center>
		<form action="#" method="post">
			<input type="text" value="hello" name="word" />
			<br />
			<b>大小写字母</b>
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
	echo  "单词数量:".$num;
}
?>
</div>