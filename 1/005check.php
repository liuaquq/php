<?php 
if(isset($_POST)){
	if($_POST['uname']=='admin'&& $_POST['upwd']=='admin'){
		echo "用户登录成功";
	}else
	{
		echo "用户登录失败";
	}
}
?>