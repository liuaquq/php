<?php 
echo "ab";
if(!empty($_POST['username'])){
	$arr=explode("-",$_POST['userdate']);
	if(checkdate($arr[1], $arr[2], $arr[0])){
		echo "<script>alert('日期".$_POST['userdate']."格式正确')</script>";
	}else{
		echo "<script>alert('日期".$_POST['userdate']."格式不正确')</script>";
	}
	
}
?>
<form action="027.php" method="post">
	<b>检测用户输入日期的合法性</b><br><br>
	用户名:<input type="text" value="" name="username"><br><br>
	生日日期:<input type="text" value="" name="userdate" size="18"><br><br>
	<input type="submit" value="提交检测">
	<input type="reset">
</form>
