<?php 
echo "ab";
if(!empty($_POST['username'])){
	$arr=explode("-",$_POST['userdate']);
	if(checkdate($arr[1], $arr[2], $arr[0])){
		echo "<script>alert('����".$_POST['userdate']."��ʽ��ȷ')</script>";
	}else{
		echo "<script>alert('����".$_POST['userdate']."��ʽ����ȷ')</script>";
	}
	
}
?>
<form action="027.php" method="post">
	<b>����û��������ڵĺϷ���</b><br><br>
	�û���:<input type="text" value="" name="username"><br><br>
	��������:<input type="text" value="" name="userdate" size="18"><br><br>
	<input type="submit" value="�ύ���">
	<input type="reset">
</form>
