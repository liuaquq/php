<title>�ļ�����</title>
<?php include("015header.php")?>
<div style="color:red;">

<a href="016.php?id=index">��ҳ</a>
<a href="016.php?id=second">���</a>
<?php 
	switch($_GET['id']){
		case "index":
			require '016m1.php';
			break;
		case "second":
			require '016m2.php';
			break;
		default:
			require '016m1.php';
	}
?>
</div>
<?php include("015footer.php")?>
