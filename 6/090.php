<div id="content">
	<center>请输入IP地址:</center>
	<center>
		<form action="#" method="post">
		<input type="text" name="ip" id="area" size="20" />
		<input type="submit" value="验证" id="input" />
		</form>
		<center>提示:IP地址为纯数字</center>
	</center>
</div>
<?php 
if(!empty($_POST['ip'])){
	$ip=$_POST['ip'];
	function preg_ip($ip){
		if(preg_match('/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d))))$/', $ip)){
			return true;
		}
		return false;
	}
	if(preg_ip($ip)){
		echo "IP地址格式正确";
	}else{
		echo "IP地址格式不正确";
	}
}
?>