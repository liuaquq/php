<?php
	if(!empty($_POST['text'])){
		$str = $_POST['text'];
		preg_match_all("/./us", $str,$match);
		$num = count($match[0]);
		if($num <= 6){
			echo "<script>alert('输入内容的长度小于6');</script>";
			
		}else{
			echo "<script>alert('发布成功');</script>";
			
		}
	}else {
		echo "hello";
	}
	?>