<div id="content">
	<center>������ͼ۸����߼۸�</center>
	<center>
	<form action="#" method="post" onsubmit="return check(this)">
	��ͼ۸�:<input type="text" name="low" size="7">
	��߼۸�:<input type="text" name="high" size="7">
	<input type="submit" value="�ύ" id="input" />
	</form>
	</center>
	<?php 
if(!empty($_POST['low'])){
	$low=$_POST['low'];
	$high=$_POST['high'];
	$temp= strcmp($low, $high);
	if($temp==0){
		echo "�۸���ͬ";
	}elseif($temp>0){
		echo "��ͼ۸������߼۸�,�ύʧ��";
	}else{
		echo "�ύ�ɹ�";
	}
}
	?>
</div>