<html>
<head>

</head>
<body>
<div id="fd">
	<p class="now"><img src="images/link1.jpg"></p>
	<p style="display:none"><img src="images/link2.jpg"></p>
	<p style="display:none"><img src="images/link3.jpg"></p>
	<p style="display:none"><img src="images/link4.jpg"></p>
	<p style="display:none"><img src="images/link5.jpg"></p>
	<ul>
		<li class="now">1</li>
		<li>2</li>
		<li>3</li>
		<li>4</li>
		<li>5</li>
	</ul>
</div>
<script type="text/javascript">

var tags = $("fd").getElementsByTagName("li");
var cats = $("fd").getElementsByTagName("p");
var current;
var timer=3000;
function disAll(){
	for(var i=0;i<tags.length; i++){
		tags[i].className="";
		cats[i].className="";
		cats[i].style.display="none";
	}
}
function setNow(){
	for(var i=0;i<tags.length;i++){
		if(tags[i].className=="now"){
			current=i;
		}
	}
}
for(var j=0;j<tags.length;j++){
	tags[j].onmouseover=function(){
		clearInterval(h);
		disAll();
		this.className="now";
		setNow();
		cats[current].style.display="block";
		cats[current].className="now";
	}
	tags[j].onmouseout=function(){
		setNow();
		h=setInterval("goNext()",3000);
	}
}

function goNext(){
	setNow();
	current+=1;
	if(current>=parseInt(tags.length)){
		current=0;
		disAll();
		cats[0].style.display="block";
		tags[0].className="now";
		cats[0].className="now";
	}else{
		disAll();
		cats[current].style.display="block";
		cats[current].className="now";
		tags[current].className="now";
	}
}
var h=setInterval("goNext()",timer)
function $(obj){
	return document.getElementById(obj);
}
</script>
</body>
</html>