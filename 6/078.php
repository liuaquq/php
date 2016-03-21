<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>

<title>在此插入标题</title>
</head>
<body>
<div id="content">
 <div id="content">

	<center>去除空格</center>
	<center>
		<form action="#" method="post">
		<textarea name="area" cols="30" rows="5"></textarea><br />
		<em>tishi</em>
		<input type="submit" value="tij" name="sel" id="input" />
		</form>
	</center>
	<div id="showtime">
<?php 
if(!empty($_POST['area'])){
	$str = $_POST['area'];
	$len = strlen($str);
	for($i=0;$i<$len;$i++){
		if($str[$i]==' '){
			$str[$i]="";
		}
	}
	echo "<b>".$str."</b>";
}

?>		
	</div>
	<p></p>
</div></div>
 </body>
</html>