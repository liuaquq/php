<html>
<head>
<title></title>

</head>
<body>
	<b>������ʱ��</b>
	<br>
	<br>
	<input type="text" value="0��" id="show" size="10">
	<br>
	<br>
	<input type="button" value="��ʼ" onclick="_start()">
	<input type="button" value="��ͣ" onclick="pause()">
	<input type="button" value="��ȫֹͣ" onclick="_stop()">
	<div id="contain">
		<b>��ʷ��¼����: </b>
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
	show.value=num+"��";
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
	his.innerHTML+="<b>��¼����Ϊ: " +num+"<b><br><br>";
}
function _stop(){
	clearInterval(t);
	temp=true;
	num=0;
	show.value="0��";
}
</script>
</body>
</html>