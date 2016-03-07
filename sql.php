<?php
$con = mysql_connect("localhost", "root", "123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_query("set character_set_connection=utf8,character_set_results=utf8,character_set_client=utf8");

$db_selected = mysql_select_db("lushi",$con);
$sql = "select * from zl where id=5";
$result = mysql_query($sql,$con);
print_r(mysql_fetch_row($result));

mysql_close($con);
?>