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
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">优尔通特色编辑</div></td>
  </tr>
  <tr>
    <td><form name="addFriend" id="addFriend" action="updateservice.php?action=editerservice&ID=<{$id}>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr>
        <td height="25"  align="right">服务类别：</td>
        <td>
			<select name="classID" style="width:150px;">
			<{foreach key=key item=item from=$classList}>
			<{if $item.id == $classID}>
			<option value="<{$item.id}>" selected="selected"><{$item.title}></option>
			<{else}>
			<option value="<{$item.id}>"><{$item.title}></option>
			<{/if}>
			<{/foreach}>
			</select>
		</td>
      </tr>
	  <tr>
        <td height="25"  align="right">特色排序：</td>
        <td><input name="service_order" type="text" size="30" value="<{$service_order}>"/><font style="color:#FF0000; font-size:12px;">注：默认状态是“1”；</font></td>
      </tr>
	  <tr>
        <td height="25"  align="right">特色关键字：</td>
        <td><input name="keywords" type="text" size="100" value="<{$keywords}>"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">特色描述：</td>
        <td><textarea name="description" cols="100" rows="6"><{$description}></textarea></td>
      </tr>
	  <tr>
        <td height="25" align="right">特色详情：</td>
        <td><{$editor}></td><input type="hidden" name="FCKediter" value="<{$FCKediterValue}>" />
      </tr>
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="center"><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
