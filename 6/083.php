<div id="content">
	<center>输入标题</center>
	<center>
		<form action="#" method="post">
		输入标题: 	<input type="text" name="title" /><br />
		首空格: <input type="radio" name="trim" value="left" />
		尾空格: <input type="radio" name="trim" value="right" />
		首尾空格: <input type="radio" name="trim" value="all" checked/>
		<input type="submit" value="执行" id="input" />
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
	echo '原字符串:'.$str.'<br>';
	echo '长度:'.strlen($str).'<br>';
	echo '显示结果:'.$str_end.'<br>';
	echo '长度: '.strlen($str_end);
}
?>
</p>
</div>