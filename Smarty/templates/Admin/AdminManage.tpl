<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{#title#}}</title>
<style type="text/css">
<!--
 a{ text-decoration:none;
 color:#000000;}
 a:hover{ text-decoration:underline;}
-->
</style>
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#666666">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">管理员管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" align="left"><table width="50%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>管理员ID</td><td>管理员名称</td><td>操作</td>
      </tr>	  
	  <{foreach key = key item = item from = $AdminArr}>
      <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'" height="30" style="font-size:16px;">
        <td><{$item.id}></td>
        <td><{$item.admin}></td>
        
        <td><a href="AddAdmin.php?AdminID=<{$item.id}>">修改</a><!--&nbsp;|&nbsp;<a href="UpdateAdmin.php?action=deleteAdmin&adminID={$item.adminID}">删除</a>--></td>
      </tr>	 
	 <{/foreach}>
    </table></td>
  </tr>
</table>

</body>
</html>
