<div>
	<ul>
		<li><a href="?id=shop1">������Ʒ</a></li>
		<li><a href="?id=shop2">�Ƽ���Ʒ</a></li>
		<li><a href="?id=#">�����Ʒ</a></li>
		<li><a href="?id=#">������Ʒ</a></li>
	</ul>

</div>
<div id="pic">
	<b>�ȵ㹺����</b>
</div>
<div id="content">

</div>
<div id="footer">
����&nbsp;2012
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