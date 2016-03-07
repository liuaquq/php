
<html>
<head>
<script>
	function check(obj){
		var src = obj.value;
		ba("showTime").src=src;
	}
	function ba(obj){
		return document.getElementById(obj);
	}
</script>
</head>
<body>
<div id="header">用户选择头像</div>
	<div id="contains">
		<select name="myMenu" id="change" onchange="check(this)">
			<option value="./images/pic1.jpg">头像1</option>
			<option value="./images/pic2.jpg">头像2</option>
			<option value="./images/pic3.jpg">头像3</option>
		</select>
	<img id="showTime" src="./images/pic1.jpg">
	
	</div>
</body>
</html>