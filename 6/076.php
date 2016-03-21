<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>在此插入标题</title>
</head>
<body>
<div id="fot">提交</div>
<form action="#" method="post" >
	<input type="text" value="" name="txt"/><br />请选择<br />
	加粗:<input type="radio" name="css" value="1" checked/>&nbsp;
	倾斜:<input type="radio" name="css" value="2" />&nbsp;
	下画线:<input type="radio" name="css" value="3" />&nbsp;<br />
	<input type="submit" value="提交" name="sel" />
</form>
<div id="showtime">
<?php 
if(!empty($_POST['txt'])){
	$type = $_POST['css'];
	switch($type){
		case "1":
			echo "<b>".$_POST['txt']."</b>";
			break;
		case "2":
			echo "<i>".$_POST['txt'].'</i>';
			break;
		case "3":
			echo "<u>".$_POST['txt'].'</u>';
			break;
		default:
			exit('参数有误');
	}
}
?>
</div>
</body>
</html>