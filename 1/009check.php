<?php
	$action = $_GET["action"];
	switch($action){
		case "add":
			echo "<script>alert('���ڿ���ʵ�����ӹ���!');</script>";
			break;
		case "del":
			echo "<script>alert('���ڿ���ʵ��ɾ������!');</script>";
			break;
		case "search":
			echo "<script>alert('���ڿ���ʵ�ֲ��ҹ���!');</script>";
			break;
		case "update":
			echo "<script>alert('���ڿ���ʵ�ָ��¹���!');</script>";
			break;
	}
	?>