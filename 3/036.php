<div>
	<ul>
		<li><a href="?id=shop1">基本商品</a></li>
		<li><a href="?id=shop2">推荐商品</a></li>
		<li><a href="?id=#">分类产品</a></li>
		<li><a href="?id=#">其他产品</a></li>
	</ul>

</div>
<div id="pic">
	<b>热点购物网</b>
</div>
<div id="content">

</div>
<div id="footer">
北京&nbsp;2012
</div>
<?php 
$shop_id = $_GET['id'];
switch($shop_id){
	case "shop1":
		require '036s1.php';
		break;
	case "shop2":
		require '036s2.php';
		break;
	default:
		require '036s1.php';
}
?>