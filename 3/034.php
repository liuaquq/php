<form method="post" action="034.php">
	���:<input type="text" name="sum" id="sum" size="15"><br>
	����1:<input type="text" name="num1" size="10"><br>
	�����:<select name="sub">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br>
	����2:<input type="text" name="num2" size="10"><br>
	<input type="submit" value="����">&nbsp;
	<input type="reset" value="����">
</form>
<?php 
if(!empty($_POST['num1'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$sub = $_POST['sub'];
	$sum = 0;
	switch($sub){
		case "+":
			$sum = $num1 + $num2;
			break;
		case "-":
			$sum = $num1 - $num2;
			break;
		case "*":
			$sum = $num1 * $num2;
			break;
		case "/":
			$sum = $num1 / $num2;
			break;
	}
	echo "<script>alert('������Ϊ: ".$sum."');</script>";
	echo "<script>document.getElementById('sum').value='".$sum."'</script>";
}
?>