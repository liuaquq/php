<div id="content">
	<center>��̬����sql���</center>
	<center>
		<form action="#" method="post">
		����: <input type="text" name="news_name" /><br />
		����: <input type="text" name="news_date" /><br />
		����:	<input type="text" name="tb_name" /><br />
		<input type="submit" value="����" id="input" />
		</form>
	</center>
	<p>
	<?php 
if(!empty($_POST['news_name'])){
	$fieldList=array('news_id','news_name','news_date');
	$post=$_POST;
	$key='';
	$value='';
	if(is_array($_POST)){
		foreach($_POST as $k=>$v){
			if(in_array($k, $fieldList)){
				$key.=$k.',';
				$value.="'".$v."',";
			}
		}
		$key= rtrim($key,',');
		$value=rtrim($value,',');
		$sql="insert into ".$_POST['tb_name']." (".$key.") values(".$value.")";
		echo $sql;
	}
	
}	
	?>
	</p>
</div>