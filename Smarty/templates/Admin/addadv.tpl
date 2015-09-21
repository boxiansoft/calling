<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<div style="margin-top:10px">
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
	<form action="updateflash.php?action=editflash&id=<{$id}>" method="post"  name="add" id="add">
	  <tr>
		<td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">Flash编辑</div></td>
	  </tr>
	  <tr>
		<td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
		  <tr bgcolor="#FFFFFF" >
			<td class="td">
			排序:<input type="text" name="flash_order" size="10" value="<{$flash_order}>"/>			
			图片:<input name="pic" type="text" size="40" value="<{$pic}>"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('uploadpic/index.html','上传图片','height=200,width=400,top=200,left=200')">上传图片</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="Submit" value=" 保 存 ">
			</td>
		  </tr>
		</table></td>
	  </tr></form>
	</table>
</div>
<div style="margin-top:10px">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666" class="c_c">
  <tr>
    <td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">Flash管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100%"><table width="60%" border="0" align="left" cellpadding="5" cellspacing="0" >
      <tr bgcolor="#FFFFFF" ><td class="td" align="center" width="10%">排序</td><td class="td" width="20%">缩略图</td><td class="td" width="15%">上传时间</td><td class="td" align="center">操作</td></tr>
	  <{foreach key=key item=item from=$classList}>
	  <tr bgcolor="#FFFFFF" onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" >
	  <td class="td" align="center"><{$item.flash_order}></td>
	  <td class="td"><img src="../upload/<{$item.pic}>" width="100" height="40" border="0"/></td>
	  <td class="td"><{$item.addTime}></td>
	  <td class="td" align="center">
	  <a href="addadv.php?id=<{$item.id}>">修改</a> | 
	  <a href="addadv.php?action=deleteflash&id=<{$item.id}>">删除</a></td></tr>	
	  <{/foreach}> 
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
