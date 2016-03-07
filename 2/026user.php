<?php
$page = isset ( $_GET ['page'] ) ? $_GET ['page'] : 1;
$pagesize = 5;
$sql = "select count(*) from db_members";
$result = mysql_query ( $sql );
$maxrows = mysql_result ( $result, 0, 0 );
$maxpage = ceil ( $maxrows / $pagesize );
if($page > $maxpage){
	$page = $maxpage;
}
if($page < 1){
	$page = 1;
	
}
$offset = ($page -1) * $pagesize;
$sql = "select * from db_members limit {$offset},$pagesize";
$result = mysql_query($sql);
while($rows = mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$rows['member_id']}</td>";
	echo "<td>{$rows['username']}</td>";
	echo "<td>{$rows['email']}</td>";
	echo "<td>".date("Y-m-d H:i:s",$rows['registertime']+8*3600)."</td>";
	echo "</td>";
}