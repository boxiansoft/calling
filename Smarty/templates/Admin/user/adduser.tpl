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
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">机构编辑</div></td>
  </tr>
  <tr>
    <td><form name="add" id="add" action="updateuser.php?action=editerUser&id=<{$id}>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
      <tr>
        <td height="25" width="15%" align="right">用户邮箱：</td>
        <td><input name="email" type="text" size="50" value="<{$email}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">用户密码：</td>
        <td><input name="pwd" type="text" size="20" value="<{$pwd}>"/>&nbsp;注：不修改请留空</td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">机构名称：</td>
        <td><input name="schoolName" type="text" size="50" value="<{$schoolName}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">手机号码：</td>
        <td><input name="mobile" type="text" size="50" value="<{$mobile}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">联系人：</td>
        <td><input name="userName" type="text" size="50" value="<{$userName}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">地区：</td>
        <td><input name="area" type="text" size="100" value="<{$area}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">早教中心：</td>
        <td><input name="courseOne" type="text" size="100" value="<{$courseOne}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">少儿外语：</td>
        <td><input name="courseTwo" type="text" size="100" value="<{$courseTwo}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">少儿才艺：</td>
        <td><input name="courseThree" type="text" size="100" value="<{$courseThree}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">少儿舞蹈：</td>
        <td><input name="courseFour" type="text" size="100" value="<{$courseFour}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">少儿音乐：</td>
        <td><input name="courseFive" type="text" size="100" value="<{$courseFive}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">少儿体育：</td>
        <td><input name="courseSix" type="text" size="100" value="<{$courseSix}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">小学教育：</td>
        <td><input name="courseSeven" type="text" size="100" value="<{$courseSeven}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">中学教育：</td>
        <td><input name="courseEight" type="text" size="100" value="<{$courseEight}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">其他：</td>
        <td><input name="courseNine" type="text" size="100" value="<{$courseNine}>"/></td>
      </tr>
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="center"><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
