<html>
<head>
<script type="text/javascript">
var arr =  new Array();
arr[0] = "��Ʒ�ܺ�";
arr[1] = "��Ʒһ��";
arr[2] = "��Ʒ�ܲ�";
arr[3] = "��Ʒ!!!(�˴�ʡ��һ�����)";
arr[4] = "��ػ��ǰ�";
function test(){
	var text = document.getElementById('test').value;
	var len = text.length;
	var sum = 0;
	for(var i=0; i<len;i++){
		sum = sum+text.charCodeAt(i);
	}
	var yushu = sum%arr.length;
	document.getElementById('show').innerHTML="�����Ʒ�÷�: "+yushu+"<br>"+arr[yushu];
}
</script></head>
<body>
<b>��Ʒ����СӦ��</b><br><br>
<input type="text" name="" id="test" size="10">
<br><br><font color="red">��ʾ:�������������</font><br><br>
<input type="button" value="����" onclick="test()">
<br><br>��ʾ���:
<div id="show"></div>
</body>
</html>