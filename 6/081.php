<center>
	<form action="#" method="post">
	字符串: <input type="text" name="rept" /><br />
	次&nbsp;&nbsp;数: <input type="text" name="num" size="10" /><br />
	<input type="submit" value="输出" id="input" name="sel" />
	</form>
</center>
<div id="center">
	<center>
	<?php 
if(!empty($_POST['rept'])){
	$str = '重复输出:'.$_POST['rept'].'<br>';
	$num = $_POST['num'];
	$str_show=str_repeat($str, $num);
	echo $str_show;
}	
	?>
	</center>
</div>