<div id="content">
	<center></center>
	<center>
		<form action="#" method="post">
			<input type="text" value="" name="pwd" />
			<br />
			<b>tis</b>
			<input type="submit" value="tij" name="sel" id="input" />
		</form>
	</center>
	<div id="showtime">
<?php 
if(!empty($_POST['pwd'])){
	$str_pwd = $_POST['pwd'];
	$str_md5 = md5($str_pwd);
}
?>	
<center>md5加密前:<br /><input type="text" value="<?php echo $str_pwd?>" /></center>
<center>md5加密后:
<textarea name="md5" id="" cols="27" rows="3">
<?php echo $str_md5?>
</textarea>
</center><br>
	</div>
</div>