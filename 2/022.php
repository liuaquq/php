<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#cccccc">
	<tr>
		<td bgcolor="#FFFFFF">
			<?php 
				$str = file_get_contents("test.txt");
				echo $str;
			?>
		</td>
	</tr>
</table>
<form action="022zhuce.php" method="post" name="register" id="form">
	<input name="action" type="hidden" id="action" value="agree">
	<input name="submit" type="submit" value="ͬ��ע��"/>&nbsp;
</form>
<form action="" method="post" name="form" id="form">&nbsp;
	<a href="022.php">
		<input name="reset2" type="reset" id="reset2" value="�Ҳ�ͬ��">
	</a>
</form>