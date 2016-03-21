<div id="content">
	<center>请选择网页文件:</center>
	<center>
		<form action="#" method="post">
		<input type="file" name="files" id="area" />
		<input type="submit" value="验证" id="input" />
		</form>
	</center>
</div>
<?php 
if(!empty($_POST['files'])){
	$url=$_POST['files'];
	function get_links($link){
		$htm=file_get_contents($link);
		$htm=str_replace("\n", "", $htm);
		$htm=preg_replace('/<a/i', "\n<a",$htm);
		$htm=preg_replace('/<\/a>/',"</a>\n", $htm);
		preg_match_all('/<a\s*.*>.*?<\/a>/', $htm,$matched);
		return($matched);
	}
	$arr_links=get_links($url);
	echo "<div id='showText'>解析网页中链接集合:<br>";
	foreach($arr_links[0] as $k=>$v){
		echo '链接: '.$v."<br>";
	}
	echo "</div>";
}
?>