<div id="content">
	<center>新闻主体内容:</center>
	<center>
		<p><?php echo $news=file_get_contents('news.txt');?></p>
	</center>
	<center>
		<form action="#" method="post">
		输入字数创建摘要: <input type="text" name="num" size="7" />
		<input type="submit" value="提交" id="input" />
		</form>
	</center>
	<center>
		<center>截取后内容:</center>
		<p id="showTime">
		<?php 
if(!empty($_POST['num'])){
	$num=$_POST['num'];
	$str=substr_replace($news,'...', $num);
	echo $str;
}
		?>
		</p>
	</center>
</div>