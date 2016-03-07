<?php
	include '021check.php';
	$uploaddir = "./files/";
	$type = array("jpg","gif","bmp","jpeg","png");
	if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type)){
		$text = implode(",", $type);
		echo "您只能上传以下类型文件: ",$text,"<br>";
	}else{
		$filename = explode(".", $_FILES['file']['name']);
		do{
			$filename[0] = random(10);
			$name = implode(".", $filename);
			$uploadfile = $upload.$name;
		}
		while(file_exists($uploadfile));
		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
				echo "您的文件已经上传完毕  上传图片预览: <br><img src='$uploadfile'";
				echo "<br><a href='javascript:history.go(-1)'>继续上传</a>";
			}else{
				echo "上传失败";
			}
		}
	}
?>