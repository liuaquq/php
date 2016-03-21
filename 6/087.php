<div id="content">
	<div id="content">
		<center>请输入标准E-mail邮箱信息:</center>
		<center>
			<form action="#" method="post">
			<input type="text" name="email" id="area" />
			<input type="submit" value="验证" id="input" />
		</form>
		</center>
	</div>
</div>
<?php 
if(!empty($_POST['email'])){

	function check_email($email){
		if(preg_match("/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$/", $email)){
			return true;
		}else{
			return false;
		}
		
	}
	if(check_email($_POST['email'])){
		echo "ok";
	}else{
		echo "no";
	}
}
?>