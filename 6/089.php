<body>
	<div id="content">
		<center>请输入密码:</center>
		<center>
			<form action="#" method="post">
			<input type="password" name="password" id="area" size="30" />
			<input type="submit" value="验证" id="input" />
			</form>
			<center>提示:密码由8-16位的大小写字母和数字组成</center>
		</center>
<?php 
if(!empty($_POST["password"])){
	$pwd=$_POST['password'];
	echo $pwd;
	function preg_pwd($pwd){
		if(preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,16}$/', $pwd)){
			return true;
		}
		return false;
	}
	if(preg_pwd($pwd)){
		echo "格式正确";
	}else{
		echo "格式不正确";
	}
}
?>
	</div>
</body>