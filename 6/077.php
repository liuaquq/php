<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>在此插入标题</title>
</head>
<body>
<div id="content">
	<center>替换文本中的关键字</center>
	<center>
		<form action="#" method="post">
		查询关键字:<input type="text" value="" name="old" size="12" />
		&nbsp;<font color="red">*</font>
		<br />
		替换关键字:<input type="text" value="" name="new" size="12" />
		&nbsp;<font color="red">*</font>
		<br />
		<em>提示: 单击提交替换!</em>
		<input type="submit" value="提交" name="sel" id="input" />
		</form>
	</center>
	<div id="showtime"></div>
	<p>
<?php 
$str = file_get_contents('test.txt');
if(!empty($_POST['old'])){
	$str_old = $_POST['old'];
	$str_new = "<font color='red'>".$_POST['new'];
	$str = str_replace($str_old,$str_new,$str);
}
echo $str;
?>	
	
</p>
</div>
</body>
</html>