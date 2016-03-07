<?php
if(isset($_POST['username'])){
	$username = strtolower($_POST['username']);
	echo "<script>alert('".$username."')</script>";
	
}
?>