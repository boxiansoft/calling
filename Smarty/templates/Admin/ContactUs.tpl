{{config_load file ="Admin.conf"}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px;font-size:16px; font-weight:bold; color:#FFFFFF">{{$aboutTitle}}</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><form id="addFriend" name="addFriend" action="UpdateSystem.php?action=contactUs&contactID={{$contactID}}" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="2" height="10"></td></tr>
	  {{if $smarty.get.contactID lt 5}}
	  <tr><td align="right" width="12%">图片：</td><td><input name="productPic" type="text" size="40" value="{{$aboutPic}}"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('uploadadv/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td></tr>
	  {{/if}}
	  <tr>
        <td align="right">{{$aboutTitle}}：</td>
        <td>{{$editor}}</td><input type="hidden" name="FCKediter" value="{$FCKediterValue}"> 
      </tr>
	  <tr><td colspan="2" height="20"></td></tr>
	  <tr>
        <td></td>
        <td class="siteName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit"  value="立即提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset"  value="重新填写"/></td>
      </tr>
    </table></form></td>
  </tr>
</table>

</body>
</html>
