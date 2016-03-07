<?php 
	header('Content-type:text/xml;charset=gb2312');
	function createFolder($path){
		if(!file_exists($path)){
			createFolder(dirname($path));
			mkdir($path,0777);
		}
	}
	createFolder("aa/bb/cc");
?>