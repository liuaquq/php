<html>
<head>
<title>�ڴ˲������</title>
</head>
<body>
<b>�ļ���չ����֤ </b><br><br>
<input type="text" name="int" value="�ļ�.��չ��Ϊ" onblur="check(this)" id="int"><br><br>
<b><font color="red">��ʾ:ֻ������php,asp��jsp�����ļ�</font></b><br>
<input type="button" value="���" onclick="check_value()">
<script type="text/javascript">
function check(obj){
	if(obj.value==""||obj.value.length<3){
		alert("���볤�Ȳ���С��3�Ҳ���Ϊ��!");
		obj.focus();
	}
		
}
function check_value(){
	var str=$("int").value;
	var repx=/\.(php|asp|jsp)$/i;
	if(str.match(repx)==null){
		alert("�ļ���չ������");
		$("int").focus();
	}else{
		alert("�ļ���չ����ȷ");
		$("int").focus();
	}
}
function $(obj){
	return document.getElementById(obj);
}
</script>
</body>
</html>