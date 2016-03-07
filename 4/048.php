<html>
<head>
<style type="text/css">
	body{
		margin:0px auto;
	}
	
	.input{
		width:120px;
	}
	
	#myform{
		width:600px;
		margin:15px auto;
		padding:20px;
		text-align:left;
		border:1px solid #A4CDF2;
	}
	form{
		border-style:none;
	}
	fieldset{
		padding:10px;
		margin-top:5px;
		border 1px solid #A4CDF2;
	}
	fieldset legend{
		color:#1E7ACE;
		font-weight:bold;
		padding:3px 20px 3px 20px;
		border:1px solid #A4CDF2;
		background:#fff;
	}
	fieldset label{
		float:left;
		width:200px;
		text-align:right;
		padding:4px;
		margin:1px;
	}
	fieldset div{
		clear:left;
		margin-bottom:2px;
	}
	.buttom{
		padding:1px 10px;
		font-size:12px;
		border:1px solid #1E7ACE;
		background:#D0F0FF;
	}
	.enter{
		text-align:center;
	}
	
</style></head>
<body>
<div id="myform">
	<center><h3>创建新用户</h3></center>
	<form method="post" name="myForm" id="">
		<fieldset>
			<legend>用户注册</legend>
			<div>
				<label for="name">用户名</label>
				<input type="text" name="Name" class="input" id="Name" size="20" maxlength="30"/>
				*(可输入字母数组下划线)<br/>
			</div>
			<div>
				<label for="Email">email</label>
				<input type="text" name="Email" class="input" id="Email" size="20" maxlength="150"/>*<br/>
			</div>
			<div>
				<label for="password">输入密码</label>
				<input type="password"name="password" class="input" id="password" size="18" maxlength="15"/>
					*(长度不能超过15个字符)<br/>
			</div>
			<div>
				<label for="confirm_password">重复密码</label>
				<input type="password" name="confirm_password" class="input" id="confirm_password" size
					="18" maxlength="15"/>*<br/>
			</div>
			<div>
				<label for="AgreeToTerms">同意用户服务条款</label>
				<input type="checkbox" name="AgreeToTerms" id="AgreetoTerms" value="1"/>
				<a href="#" title="您是否同意服务条款">单击此查看用户条款</a>*
			</div>
			<div class="enter">
				<input name="submit" type="submit" class="buttom" value="提交"/>
				<input name="submit" type="reset" class="buttom" value="重置"/>
			</div>
		</fieldset>
	</form>
	<br/>
</div>
</body>
</html>