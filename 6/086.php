<div id="content">
	<div id="content">
		<center>�������׼HTML��ǩ����: </center>
		<center>
			<form action="#" method="post">
			<textarea name="area" id="area" cols="40" rows="5"></textarea>
			<input type="submit" value="��֤" id="input" />
			</form>
		</center>
	</div>
</div>
<?php 
if(!empty($_POST['area'])){
	function check_html($html){
		preg_match_all("/<([a-zA-Z0-9]+)\\s*[^\\/>]*>/", $html,$start_tags);
		preg_match_all("/<\\/([a-zA-Z0-9]+)>/", $html,$end_tags);
		if((count($start_tags[1])!=count($end_tags[1]))){
			return false;
		}
		for($i=0;$i<count($start_tags[1]);$i++){
			if(!in_array($start_tags[1][$i], $end_tags[1])){
				return false;
			}
		}
		return true;
		
	}
	if(check_html($_POST['area'])){
		echo "HTMLͨ��";
	}else{
		echo "HTML��ͨ��";
	}
}
?>