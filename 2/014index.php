<?php
	if(!empty($_POST['text'])){
		$str = $_POST['text'];
		preg_match_all("/./us", $str,$match);
		$num = count($match[0]);
		if($num <= 6){
			echo "<script>alert('�������ݵĳ���С��6');</script>";
			
		}else{
			echo "<script>alert('�����ɹ�');</script>";
			
		}
	}else {
		echo "hello";
	}
	?>