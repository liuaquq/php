<div id="content">
<center>请输入查询关键字:</center>
<center>
	<form action="#" method="post">
		<input type="text" value="" name="str" size="10" /><br />
		<input type="submit" value="生成" id="input" />
	</form>
	<center>提示;输入长度不能大于10
	<?php echo $text=file_get_contents('news.txt');?>
	</center>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['str'])){
	$str= $_POST['str'];
	echo '关键字出现次数: '.substr_count($text, $str)."次";

}
?>
</center>
</div>
