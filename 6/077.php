<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>�ڴ˲������</title>
</head>
<body>
<div id="content">
	<center>�滻�ı��еĹؼ���</center>
	<center>
		<form action="#" method="post">
		��ѯ�ؼ���:<input type="text" value="" name="old" size="12" />
		&nbsp;<font color="red">*</font>
		<br />
		�滻�ؼ���:<input type="text" value="" name="new" size="12" />
		&nbsp;<font color="red">*</font>
		<br />
		<em>��ʾ: �����ύ�滻!</em>
		<input type="submit" value="�ύ" name="sel" id="input" />
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