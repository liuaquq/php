<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>在此插入标题</title>
</head>
<body>
<table width="400" border="0" align="center">
	<tr>
		<th>选项</th>
		<th>发件人</th>
		<th>邮件名称</th>
		<th>邮件附属信息</th>
	</tr>
	<tbody id="tbs">
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>王大力</td>
		<td>wel@163.com</td>
		<td>个人邮箱</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>王大力</td>
		<td>wel@163.com</td>
		<td>个人邮箱</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>王大力</td>
		<td>wel@163.com</td>
		<td>个人邮箱</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>王大力</td>
		<td>wel@163.com</td>
		<td>个人邮箱</td>
	</tr>
	<tr>
		<th></th>
		<td colspan="3" align="center">
		<input type="button" id="qx" onclick="xuan('qx')" value="全选">
		<input type="button" id="qxx" onclick="xuan('qxx')" value="取消选择">
		<input type="button" id="fx" onclick="xuan('fx')" value="反选">
		<input type="button" id="del" onclick="del()" value="删除所选附件">
		</td>
	</tr>
	</tbody>  
</table>
<script type="text/javascript">
function xuan(type){
	var tbs=document.getElementById("tbs");
	var chks=tbs.getElementsByTagName("input");
	switch(type){
		case "qx":
			for(var i=0;i<chks.length;i++){
				chks[i].checked=true;
			}
			break;
		case "qxx":
			for(var i=0;i<chks.length;i++){
				chks[i].checked=false;
			}
			break;
		case "fx":
			for(var i=0;i<chks.length;i++){
				if(chks[i].checked){
					chks[i].checked=false;
				}else{
					chks[i].checked=true;
				}
			}
		break;
	}
}
function changeColor(){
	var tr=document.getElementsByTagName("tr");
	tr[0].style.background="#0066ff";
	tr[tr.length-1].style.background="#0066ff";
}
function del(){
	var input=document.getElementsByName("check[]");
	for(var i=input.length-1;i>=0;i--){
		if(input[i].checked==true){
			var td=input[i].parentNode;
			var tr=td.parentNode;
			var table=tr.parentNode;
			table.removeChild(tr);
		}
	}
}
</script>
</body>
</html>