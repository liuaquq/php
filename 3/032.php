<?php 
header("Content-type:text/html;charset=gb2312");
echo "<center><b>���л�ɫ���</b></center>";
$color="";
echo "<table border='1' width='200px' height='200px' align='center' cellspacing='0'";
for($i = 0; $i <5; $i++){
	if($i%2 ==0){
		$color = "red";
	}else{
		$color = "blue";
	}
	echo "<tr bgcolor='".$color."'>";
	for($j = 0;$j <5; $j++){
		echo "<td>".$j."</td>";
	}
	echo "</tr>";
} 
echo "</table>";
?>