<html>
<head>
<title></title>

</head>
<body>
	<b>简单秒表计时器</b>
	<br>
	<br>
	<input type="text" value="0秒" id="show" size="10">
	<br>
	<br>
	<input type="button" value="开始" onclick="_start()">
	<input type="button" value="暂停" onclick="pause()">
	<input type="button" value="完全停止" onclick="_stop()">
	<div id="contain">
		<b>历史记录区域: </b>
		<div id="his"></div>
	</div>
	<script type="text/javascript">
var temp= true;
var num=0;
var t;
var show=document.getElementById('show');
var div1=document.getElementById("his");
function showTime(){
	num++;
	show.value=num+"秒";
}
function  _start(){
	if(temp){
		t=setInterval("showTime()",1000);
		temp=false;
	}
}
function pause(){
	clearInterval(t);
	temp=true;
	his.innerHTML+="<b>记录秒数为: " +num+"<b><br><br>";
}
function _stop(){
	clearInterval(t);
	temp=true;
	num=0;
	show.value="0秒";
}
</script>
</body>
</html>