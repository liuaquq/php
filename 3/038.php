<?php
$con=mysql_connect("localhost",'root','123456');
mysql_select_db('demo');
$sql="select * from sheet1";
$result=mysql_query($sql);
?>



<form action="038.php" method="post">
<table border=1>
<tr>
<?php 
while ($rows=mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$rows['member_id']}</td>";
	echo "<td>{$rows['username']}</td>";
	echo "<td>{$rows['email']}</td>";
	echo "<td>".date("Y-m-d H:i:s",$rows['registertime']+8*3600)."</td>";
	echo "<td><input type='checkbox' value='".$rows['member_id']."' name='member_id[]'></td>";
	echo "</tr>";
}
?>
</table>
<input type="submit">
</form>
<?php 
if(!empty($_POST['member_id'])){
	$arr=$_POST['member_id'];
		$str_key="";
		foreach ($arr as $key=>$value){
			$sql="delete from sheet1 where member_id=".$value;
			mysql_query($sql);
			$str_key.=$value.",";
			
		}
		$new_str= substr($str_key, 0,strlen($str_key)-1);
		echo "<script>alert('删除编号为".$new_str."的的信息成功!');location='038.php'</script>";
}
?>