<?php
$num=5;
$start=0;
$end=9;
$connt=0;
while($connt<$num){
	$a[]=rand($start,$end);
	$ary=array_unique($a);
	$connt=count($ary);
}
$str="";
foreach($ary as $key=>$value){
	$str.="&nbsp;".$value;
}
$str="";
foreach($ary as $key=>$value){
	$str.="&nbsp;".$value;
}
echo "<b>������5�������</b><br><br>";
echo "�����:<b>".$str."</b>";
echo "<b><br><br><b><font color='red'>��Χ0~9�Ҳ��ظ�</font><b>";
?>