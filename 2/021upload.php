<?php
	include '021check.php';
	$uploaddir = "./files/";
	$type = array("jpg","gif","bmp","jpeg","png");
	if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type)){
		$text = implode(",", $type);
		echo "��ֻ���ϴ����������ļ�: ",$text,"<br>";
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
				echo "�����ļ��Ѿ��ϴ����  �ϴ�ͼƬԤ��: <br><img src='$uploadfile'";
				echo "<br><a href='javascript:history.go(-1)'>�����ϴ�</a>";
			}else{
				echo "�ϴ�ʧ��";
			}
		}
	}
?>