<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">招聘管理</div></td>
  </tr>
  <tr>
    <td><form name="addFriend" id="addFriend" action="UpdateNews.php?action=editerNews&ID=<{$id}>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
      <tr>
        <td height="25" width="15%" align="right">招聘标题：</td>
        <td><input name="title" type="text" size="80" value="<{$title}>"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">招聘关键字：</td>
        <td><input name="keywords" type="text" size="100" value="<{$keywords}>"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">招聘描述：</td>
        <td><textarea name="description" cols="100" rows="6"><{$description}></textarea></td>
      </tr>
	  <tr>
        <td height="25" align="right">招聘详情：</td>
        <td><{$editor}></td><input type="hidden" name="FCKediter" value="<{$FCKediterValue}>" />
      </tr>
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="center"><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
