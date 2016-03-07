<?php 
	function m_substr($str,$start,$length){
		$str_length = $start + $length;
		$tmp_str = "";
		for($i = 0; $i < $str_length; $i++){
			if(ord(substr($str,$i,1)) == 0x0a){
				$tmp_str .= '<br/>';
				
			}
			if(ord(substr($str,$i,1)) == 0xa0){
				$tmp_str .= substr($str, $i, 2);
				$i++;
			}else{
				$tmp_str .= substr($str, $i,1);
			}
		}
		return $tmp_str;
	}
?>
<body>
	<div id="header"><b>文本文件内容分页显示</b></div>
	<div id="content"></div>
	<div id="show">
	<p>
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$counter = file_get_contents("test.txt");
		$length = strlen($counter);
		$page_count = ceil($length/40);
		$str = m_substr($counter, 0, ($page-1)*40);
		$str1 = m_substr($counter, 0, $page*40);
		echo substr($str1, strlen($str),strlen($str1)-strlen($str));
		
	?>
	</div><div><span>
	<?php 
		echo "当前页:".$page."/".$page_count."&nbsp";
		echo "<a href='025.php?page=1'>首页&nbsp;</a>";
		if ($page > 1){
			echo "<a href='025.php?page=".($page-1)."'>上一页&nbsp;</a>";
		}
		if( $page < $page_count){
			echo "<a href='025.php?page=".($page + 1)."'>下一页&nbsp;</a>";
		}
		echo "<a href='025.php?page=".$page_count."'>尾页&nbsp;</a>";
		
		
	?>
	</span></div>
	<div id="footer"><br>文本分页</div>
	
</body>