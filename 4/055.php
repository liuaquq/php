<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>�ڴ˲������</title>
</head>
<body>
<b>����������֤��ʾ</b><br><br>
<input type="text" name="int" id="int" value="�����봿�����ַ�"><br>
<input type="button" value="��ʾ" onclick="check()"><br>
<div id="showArea"></div>
	<form action="056.php" method="post" name="zcform" onSubmit="return check()">
	<table>
	<tr>
				<td colspan=2 bgcolor="#E5F6BF"><b>�û�ע���</b></td>
			</tr>
			<tr>
				<td class="td_left">�û���</td>
				<td class="td_right">&nbsp;<input name="hy_username" type="text"
					class="gray" id="hy_username" size="30" /> <input name="jiance"
					onClick="openwin()" type="button" id="jiance" value="����û���">*
				</td>
			</tr>

			<tr>
				<td>����</td>
				<td><input name="hy_password" type="text" id="hy_password" /></td>
			</tr>
			<tr>
				<td>ȷ������</td>
				<td><input name="hy_password2" type="text" id="hy_password2" /></td>
			</tr>
			<tr>
				<td>�Ա�</td>
				<td><input type="radio" name="radiobutton" value="radiobutton" /> ��

					<input type="radio" name="radiobutton" value="radiobutton" /> Ů</td>
			</tr>
			<tr>
				<td>��ʵ����</td>
				<td><input name="hy_okname" type="text" id="hy_okname" /></td>
			</tr>
			<tr>
				<td>��ϵ�绰</td>
				<td><input name="hy_tel" type="text" id="hy_tel" /></td>
			</tr>
			<tr>
				<td>���֤</td>
				<td><input type="text" name="textfield5" /></td>
			</tr>
			<tr>
				<td>��Ѷqq</td>
				<td><input type="text" name="textfield6" /></td>
			</tr>
			<tr>
				<td>��������</td>
				<td><input type="text" name="textfield7" /></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="textfield8" /></td>
			</tr>
			<tr>
				<td>���˼��</td>
				<td><textarea name="jianli" id="jianli"></textarea></td>
			</tr>
			<tr>
				<td height="35" colspan="2" align="center" valign="middle"
					bgcolor="#E5F6BF"><input type="submit" name="Submit" class="zhuce"
					value="ע��">&nbsp; <input name="reset" type="reset" id="reset"
					class="zhuce" value="ȡ��"> <input name="action" type="hidden"
					id="action" value="add"></td>
			</tr>
		</table>
			
	</form>
<script type="text/javascript">
function check(){
	var str=$("int").value;
	if(!isChinese(str)){
		alert("�ַ������������ַ�");
		$("int").focus();
	}else{
		$("showArea").innerHTML+="����: <font color='red'>"+str+"</font><br>";
		alert("�ַ���Ϊȫ������ʾ");
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