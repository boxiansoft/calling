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
	<form action="updatefriend.php?action=editfriend&id=<{$id}>" method="post"  name="addFriend" id="addFriend">
	  <tr>
		<td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">友情链接编辑</div></td>
	  </tr>
	  <tr>
		<td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
		  <tr bgcolor="#FFFFFF" >
			<td class="td">
			排序:<input type="text" name="orderby" size="10" value="<{$orderby}>"/>
			网址:<input type="text" name="weburl" size="30" value="<{$weburl}>"/>
			站名:<input name="webName" type="text" size="40" value="<{$webName}>"/>&nbsp;&nbsp;&nbsp;&nbsp;
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
    <td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">友情链接管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100%"><table width="90%" border="0" align="left" cellpadding="5" cellspacing="0" >
      <tr bgcolor="#FFFFFF" ><td class="td" align="center" width="10%">排序</td><td class="td" width="20%">站名</td><td class="td" width="30%">网址</td><td class="td" width="10%">添加时间</td><td class="td" align="center">操作</td></tr>
	  <{foreach key=key item=item from=$classList}>
	  <tr bgcolor="#FFFFFF" onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" >
	  <td class="td" align="center"><{$item.orderby}></td>
	  <td class="td"><{$item.weburl}></td>
	  <td class="td"><{$item.webName}></td>
	  <td class="td"><{$item.addTime}></td>
	  <td class="td" align="center">
	  <a href="addfriend.php?id=<{$item.id}>">修改</a> | 
	  <a href="addfriend.php?action=deletefriend&id=<{$item.id}>">删除</a></td></tr>	
	  <{/foreach}> 
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
