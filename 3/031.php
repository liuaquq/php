<form method="post" action="031.php">
	<b>������ѯ�����ճ�</b>
	<br><br>
	�����ѯ����:<br>
	<input type="text" value="" name="date"><br><br>
	<input type="submit" value="��ѯ">&nbsp;
	<input type="reset">
</form>
<?php 
if(!empty($_POST['date'])){
	$date = $_POST['date'];
	$rc = array();
	$rc['07-07'] = '��س���';
	$rc['07-12'] = 'ͬѧ�ۻ�';
	$rc['07-21'] = '���û���';
	$rc['07-23'] = '������Ʒ';
	$rc['07-29'] = '�շ��ʼ�';
	foreach($rc as $key=>$value){
		if($key == $date){
			echo "<script>alert('".$key."�ձ���: ".$value."')</script>";
			break;
		}else{
			echo "<script>alert('�ޱ���')</script>";
			break;
		}
	}
}
?>