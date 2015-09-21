<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px;font-size:16px; font-weight:bold; color:#FFFFFF"><{$userName}></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><form id="systemNumber" name="systemNumber" action="" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="2" height="10"></td></tr>
	  <tr>
        <td height="25" align="right">客户姓名：</td>
        <td><input name="" type="text" style="width:400px" value="<{$userName}>"/></td>
      </tr>
	  <tr>
        <td height="25" align="right">用户电话：</td>
        <td><input name="" type="text" style="width:400px" value="<{$mobile}>"/></td>
      </tr>
	  <tr>
        <td height="25" align="right">用户邮箱：</td>
        <td><input name="" type="text" style="width:400px" value="<{$email}>"/></td>
      </tr>
	  <tr>
        <td height="25" align="right">留言详情：</td>
        <td><{$editor}></td><input type="hidden" name="FCKediter" value="<{$content}>" />
      </tr>
	  <tr><td colspan="2" height="20"></td></tr>
	  <tr onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
        <td></td>
        <td class="siteName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset"  value="返回" onclick="javascript:window.location.href='Message.php'" style="width:80px;"/></td>
      </tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
