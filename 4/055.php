<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>在此插入标题</title>
</head>
<body>
<b>中文输入验证显示</b><br><br>
<input type="text" name="int" id="int" value="请输入纯中文字符"><br>
<input type="button" value="显示" onclick="check()"><br>
<div id="showArea"></div>
	<form action="056.php" method="post" name="zcform" onSubmit="return check()">
	<table>
	<tr>
				<td colspan=2 bgcolor="#E5F6BF"><b>用户注册表单</b></td>
			</tr>
			<tr>
				<td class="td_left">用户名</td>
				<td class="td_right">&nbsp;<input name="hy_username" type="text"
					class="gray" id="hy_username" size="30" /> <input name="jiance"
					onClick="openwin()" type="button" id="jiance" value="检测用户名">*
				</td>
			</tr>

			<tr>
				<td>密码</td>
				<td><input name="hy_password" type="text" id="hy_password" /></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input name="hy_password2" type="text" id="hy_password2" /></td>
			</tr>
			<tr>
				<td>性别</td>
				<td><input type="radio" name="radiobutton" value="radiobutton" /> 男

					<input type="radio" name="radiobutton" value="radiobutton" /> 女</td>
			</tr>
			<tr>
				<td>真实姓名</td>
				<td><input name="hy_okname" type="text" id="hy_okname" /></td>
			</tr>
			<tr>
				<td>联系电话</td>
				<td><input name="hy_tel" type="text" id="hy_tel" /></td>
			</tr>
			<tr>
				<td>身份证</td>
				<td><input type="text" name="textfield5" /></td>
			</tr>
			<tr>
				<td>腾讯qq</td>
				<td><input type="text" name="textfield6" /></td>
			</tr>
			<tr>
				<td>邮政编码</td>
				<td><input type="text" name="textfield7" /></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="textfield8" /></td>
			</tr>
			<tr>
				<td>个人简介</td>
				<td><textarea name="jianli" id="jianli"></textarea></td>
			</tr>
			<tr>
				<td height="35" colspan="2" align="center" valign="middle"
					bgcolor="#E5F6BF"><input type="submit" name="Submit" class="zhuce"
					value="注册">&nbsp; <input name="reset" type="reset" id="reset"
					class="zhuce" value="取消"> <input name="action" type="hidden"
					id="action" value="add"></td>
			</tr>
		</table>
			
	</form>
<script type="text/javascript">
function check(){
	var str=$("int").value;
	if(!isChinese(str)){
		alert("字符串中有其他字符");
		$("int").focus();
	}else{
		$("showArea").innerHTML+="中文: <font color='red'>"+str+"</font><br>";
		alert("字符串为全中文显示");
	}
}
function isChinese(str){
	for(var i=0;i<str.length;i++){
		if(str.charCodeAt(i)>=10000){
			return true;
		}
	}
}
function $(obj){
	return document.getElementById(obj);
}
</script>
</body>
</html>