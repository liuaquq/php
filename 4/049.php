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
		padding:0px;
		text-align:left;
		border:1px solid #A4CDF2;
		background-color:#fff; 
	}
	#contains{
		width:600px;
		margin:15px auto;
		padding:20px;
		text-align:left;
		border:1px solid #A4CDF2;
		background-color:#fff; 
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
	
</style>
<script type="text/javascript">
function show(){
	document.getElementById("zhezhao").style.display="";
	document.getElementById("contains").style.display="";
	document.getElementById("zhezhao").style.filter= "Alpha(Opacity=50)";
}
function hide(){
	document.getElementById("zhezhao").style.display="none";
	document.getElementById("contains").style.display="none";
}
</script>
</head>
<body>
<input onclick="show()" type="button" value="��ʾ" style="font-size:15px;"/>
<div style="width:100%; background-color:Gray; display:none; height:100%;position:absolute;left:0;top:0;" id="zhezhao">
	
</div>
<div style="width:642px; display:none;height:auto;position:absolute;left:400px; top:70px;"
	id="contains">
	<div id="myform">
	<center><h3>�������û�</h3></center>
	<form method="post" name="myForm" id="">
		<fieldset>
			<legend>�û�ע��</legend>
			<div>
				<label for="name">�û���</label>
				<input type="text" name="Name" class="input" id="Name" size="20" maxlength="30"/>
				*(��������ĸ�����»���)<br/>
			</div>
			<div>
				<label for="Email">email</label>
				<input type="text" name="Email" class="input" id="Email" size="20" maxlength="150"/>*<br/>
			</div>
			<div>
				<label for="password">��������</label>
				<input type="password"name="password" class="input" id="password" size="18" maxlength="15"/>
					*(���Ȳ��ܳ���15���ַ�)<br/>
			</div>
			<div>
				<label for="confirm_password">�ظ�����</label>
				<input type="password" name="confirm_password" class="input" id="confirm_password" size
					="18" maxlength="15"/>*<br/>
			</div>
			<div>
				<label for="AgreeToTerms">ͬ���û���������</label>
				<input type="checkbox" name="AgreeToTerms" id="AgreetoTerms" value="1"/>
				<a href="#" title="���Ƿ�ͬ���������">�����˲鿴�û�����</a>*
			</div>
			<div class="enter">
				<input name="submit" type="submit" class="buttom" value="�ύ"/>
				<input name="submit" type="reset" class="buttom" value="����"/>
			</div>
			<div  class="enter">
			<input onclick='hide()' type='button' value="�ر�" id="close"/></div>
			
		</fieldset>
	</form>
	<br/>
</div>
	

	</div> 
	
</body>
</html>