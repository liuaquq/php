<div id="content">
	<center>输入最低价格和最高价格</center>
	<center>
	<form action="#" method="post" onsubmit="return check(this)">
	最低价格:<input type="text" name="low" size="7">
	最高价格:<input type="text" name="high" size="7">
	<input type="submit" value="提交" id="input" />
	</form>
	</center>
	<?php 
if(!empty($_POST['low'])){
	$low=$_POST['low'];
	$high=$_POST['high'];
	$temp= strcmp($low, $high);
	if($temp==0){
		echo "价格相同";
	}elseif($temp>0){
		echo "最低价格大于最高价格,提交失败";
	}else{
		echo "提交成功";
	}
}
	?>
</div>