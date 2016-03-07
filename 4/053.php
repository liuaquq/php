<html>
<head>
<title>在此插入标题</title>
</head>
<body>
<b>文件扩展名验证 </b><br><br>
<input type="text" name="int" value="文件.扩展名为" onblur="check(this)" id="int"><br><br>
<b><font color="red">提示:只能输入php,asp和jsp类型文件</font></b><br>
<input type="button" value="检测" onclick="check_value()">
<script type="text/javascript">
function check(obj){
	if(obj.value==""||obj.value.length<3){
		alert("输入长度不能小于3且不能为空!");
		obj.focus();
	}
		
}
function check_value(){
	var str=$("int").value;
	var repx=/\.(php|asp|jsp)$/i;
	if(str.match(repx)==null){
		alert("文件扩展名有误");
		$("int").focus();
	}else{
		alert("文件扩展名正确");
		$("int").focus();
	}
}
function $(obj){
	return document.getElementById(obj);
}
</script>
</body>
</html>