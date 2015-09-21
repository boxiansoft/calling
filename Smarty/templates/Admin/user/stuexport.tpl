<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="../js/datecontrol/WdatePicker.js"></script>
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">学生信息导出</div></td>
  </tr>
  <tr>
    <td><form name="add" id="add" action="?action=export" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
      <tr>
        <td height="25" width="15%" align="right">开始时间：</td>
        <td><input name="startDate" id="startDate" type="text" size="20" value="<{$startDate}>"  onclick="WdatePicker({el:'startDate'})" /></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">结束时间：</td>
        <td><input name="endDate" id="endDate" type="text" size="20" value="<{$endDate}>"  onclick="WdatePicker({el:'endDate'})" /></td>
      </tr>	  
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="left"><input name="submit" type="submit" value="立即导出"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
