<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<title>�ڴ˲������</title>
</head>
<body>
<table width="400" border="0" align="center">
	<tr>
		<th>ѡ��</th>
		<th>������</th>
		<th>�ʼ�����</th>
		<th>�ʼ�������Ϣ</th>
	</tr>
	<tbody id="tbs">
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>������</td>
		<td>wel@163.com</td>
		<td>��������</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>������</td>
		<td>wel@163.com</td>
		<td>��������</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>������</td>
		<td>wel@163.com</td>
		<td>��������</td>
	</tr>
	<tr class="one">
		<td><input type="checkbox" name="check[]"></td>
		<td>������</td>
		<td>wel@163.com</td>
		<td>��������</td>
	</tr>
	<tr>
		<th></th>
		<td colspan="3" align="center">
		<input type="button" id="qx" onclick="xuan('qx')" value="ȫѡ">
		<input type="button" id="qxx" onclick="xuan('qxx')" value="ȡ��ѡ��">
		<input type="button" id="fx" onclick="xuan('fx')" value="��ѡ">
		<input type="button" id="del" onclick="del()" value="ɾ����ѡ����">
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