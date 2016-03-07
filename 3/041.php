<html>
<head>
	<style type="text/css">
		#footer ul{
			width:900px;
			margin:auto;
			list-style-type:none;
		}
		#footer ul li{
			float:left;
			height:103px;
			margin-left:3px;
			margin-right:3px;
		}
		#footer ul li aP
			margin-top:13px;
		}
		#foot{
			width:100px;
			height:32px;
			background:#eec url('/images/link.jpg') repeat;
			text-align:center;
			line-height:32px;
		}
	</style>
</head>
<body>
<div id="footer">
	<ul>
		<?php 
			for($i=1;$i<=5;$i++){
				echo "<li><a href=\"#\"><img src=\"./images/link".$i.".jpg\" width=\"160\" height=\"70\"></a></li>";
			}
		?>
	</ul>
</div>
</body>
</html>