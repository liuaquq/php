<div id="content">
	<center>������������:</center>
	<center>
		<p><?php echo $news=file_get_contents('news.txt');?></p>
	</center>
	<center>
		<form action="#" method="post">
		������������ժҪ: <input type="text" name="num" size="7" />
		<input type="submit" value="�ύ" id="input" />
		</form>
	</center>
	<center>
		<center>��ȡ������:</center>
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