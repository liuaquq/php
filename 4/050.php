<html>
<head>
<script type="text/javascript">
var arr =  new Array();
arr[0] = "人品很好";
arr[1] = "人品一般";
arr[2] = "人品很差";
arr[3] = "极品!!!(此处省略一万个字)";
arr[4] = "快回火星吧";
function test(){
	var text = document.getElementById('test').value;
	var len = text.length;
	var sum = 0;
	for(var i=0; i<len;i++){
		sum = sum+text.charCodeAt(i);
	}
	var yushu = sum%arr.length;
	document.getElementById('show').innerHTML="你的人品得分: "+yushu+"<br>"+arr[yushu];
}
</script></head>
<body>
<b>人品测试小应用</b><br><br>
<input type="text" name="" id="test" size="10">
<br><br><font color="red">提示:请输入你的名字</font><br><br>
<input type="button" value="测试" onclick="test()">
<br><br>显示结果:
<div id="show"></div>
</body>
</html>