<form method="post" action="031.php">
	<b>单击查询当月日程</b>
	<br><br>
	输入查询日期:<br>
	<input type="text" value="" name="date"><br><br>
	<input type="submit" value="查询">&nbsp;
	<input type="reset">
</form>
<?php 
if(!empty($_POST['date'])){
	$date = $_POST['date'];
	$rc = array();
	$rc['07-07'] = '外地出差';
	$rc['07-12'] = '同学聚会';
	$rc['07-21'] = '信用还贷';
	$rc['07-23'] = '购买商品';
	$rc['07-29'] = '收发邮件';
	foreach($rc as $key=>$value){
		if($key == $date){
			echo "<script>alert('".$key."日备忘: ".$value."')</script>";
			break;
		}else{
			echo "<script>alert('无备忘')</script>";
			break;
		}
	}
}
?>