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
	<form action="updateservice.php?action=editFirstClass&firstID=<{$firstID}>&id=<{$id}>" method="post" name="add">
	  <tr>
		<td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">编辑类别</div></td>
	  </tr>
	  <tr>
		<td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
		  <tr bgcolor="#FFFFFF" >
			<td class="td">
			序号:<input type="text" name="orderby" size="10" value="<{$orderby}>"/>
			类名:<input type="text" name="title" size="30" value="<{$title}>"/>&nbsp;&nbsp;&nbsp;&nbsp;
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
    <td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">管理类别</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100%"><table width="50%" border="0" align="left" cellpadding="5" cellspacing="0" >
      <tr bgcolor="#FFFFFF" ><td class="td" align="center">序号</td><td class="td">类名</td><td class="td" align="center">操作</td></tr>
	  <{foreach key=key item=item from=$classList}>
	  <tr bgcolor="#FFFFFF" onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" >
	  <td class="td" align="center"><{$item.orderby}></td>
	  <td class="td"><{$item.title}></td>
	  <td class="td" align="center">
	  <a href="firstclass.php?action=updateClass&firstID=<{$item.firstID}>&id=<{$item.id}>">修改</a> | 
	  <a href="updateservice.php?action=deleteFirstClass&id=<{$item.id}>">删除</a></td></tr>	
	  <{/foreach}> 
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
