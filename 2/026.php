<?php
include '026conn.php';
$page = isset ( $_GET ['page'] ) ? $_GET ['page'] : 1;
echo $page;
$pagesize = 2;
$sql = "select count(*)from sheet1";
$result = mysql_query ( $sql );
$maxrows = mysql_result ( $result, 0, 0 );
$maxpage = ceil ( $maxrows / $pagesize );
echo $maxrows;
echo $maxpage;
if($page > $maxpage){
	$page = $maxpage;
}
if($page < 1){
	$page = 1;
	
}
echo $page;
$offset = ($page -1) * $pagesize;
$sql = "select * from sheet1 limit {$offset},$pagesize";
$result = mysql_query($sql);
echo "<table border=1>";
while($rows = mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$rows['member_id']}</td>";
	echo "<td>{$rows['username']}</td>";
	echo "<td>{$rows['email']}</td>";
	echo "<td>".date("Y-m-d H:i:s",$rows['registertime']+8*3600)."</td>";
	echo "</tr>";
}
echo "</table>";
?>
<?php 
	echo "<br>";
	echo "当前($page)/($maxpage)页    共计($maxpage)条信息";
	echo "<a href='026.php?page=1'>首页</a>";
	echo "<a href='026.php?page=".($page-1)."'>上一页</a>";
	echo "<a href='026.php?page=".($page+1)."'>下一页</a>";
?>