论坛留言<br>
<form name="myForm" action="014index.php" method="post" onsubmit="returncheck()">
	<textarea rows="5" cols="6" name="text"></textarea>
	<br><br>
	<input type="submit" value="发布回帖">
</form>
<script>
	function check(){
		if(document.myForm.text.value==""){
			alert("不能为空");
			return false;
		}
		return true;
	}
	
</script>