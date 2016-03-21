<div id="content">
<center>请输入标题内容和日期:</center>
<center>
	<form action="#" method="post">
		新闻标题:<input type="text" value="" name="news_title" size="10" /><br />
		新闻内容:<input type="text" value="" name="news_content" size="10" /><br />
		新闻日期:<input type="text" value="" name="news_date" size="10" /><br />
		<input type="submit" value="生成" id="input" />
	</form>
</center>
<center id="showStr">
<?php 
if(!empty($_POST['news_title'])){
	$arr=$_POST;
	echo "结果: ".implode($arr,",");

}
?>
</center>
</div>
