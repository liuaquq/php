<div id="content">
<center>������������ݺ�����:</center>
<center>
	<form action="#" method="post">
		���ű���:<input type="text" value="" name="news_title" size="10" /><br />
		��������:<input type="text" value="" name="news_content" size="10" /><br />
		��������:<input type="text" value="" name="news_date" size="10" /><br />
		<input type="submit" value="����" id="input" />
	</form>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['news_title'])){
	$arr=$_POST;
	echo "���: ".implode($arr,",");

}
?>
</center>
</div>
