<body>
	<div id="content">
		<center>����������:</center>
		<center>
			<form action="#" method="post">
			<input type="password" name="password" id="area" size="30" />
			<input type="submit" value="��֤" id="input" />
			</form>
			<center>��ʾ:������8-16λ�Ĵ�Сд��ĸ���������</center>
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
		echo "��ʽ��ȷ";
	}else{
		echo "��ʽ����ȷ";
	}
}
?>
	</div>
</body>