<div id="content">
	<center>������IP��ַ:</center>
	<center>
		<form action="#" method="post">
		<input type="text" name="ip" id="area" size="20" />
		<input type="submit" value="��֤" id="input" />
		</form>
		<center>��ʾ:IP��ַΪ������</center>
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
		echo "IP��ַ��ʽ��ȷ";
	}else{
		echo "IP��ַ��ʽ����ȷ";
	}
}
?>