��̳����<br>
<form name="myForm" action="014index.php" method="post" onsubmit="returncheck()">
	<textarea rows="5" cols="6" name="text"></textarea>
	<br><br>
	<input type="submit" value="��������">
</form>
<script>
	function check(){
		if(document.myForm.text.value==""){
			alert("����Ϊ��");
			return false;
		}
		return true;
	}
	
</script>