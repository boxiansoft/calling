<{config_load file = "Admin.conf"}>
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
    <td height="30"  style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">财务管理中心</div></td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="7" height="5"></td>
      </tr>
      <tr>
        <td width="10%">机构邮箱</td><td width="15%">机构名称</td><td width="10%">联系人</td><td width="10%">手机号码</td><td width="10%">充值金额</td><td width="15%">充值时间</td><td width="10%">操作</td>
      </tr>
	   <tr><td colspan="7"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
	   	  <{foreach key = key item = item from = $feeList}>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">		    	
			<td height="30"><{$item.email}></td>
			<td><{$item.schoolName}></td>
			<td><{$item.userName}></td>
			<td><{$item.mobile}></td>
			<td><{$item.fee}></td>
			<td><{$item.add_time}></td>
			<td><a href="feelist.php?action=delete&id=<{$item.id}>">删除</a></td>
		 </tr>
		 <{/foreach}>
		 <tr><td colspan="7"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
			 <tr>
				<td colspan="7" bgcolor="#1D74CB" height="30" align="center"><div class="page"><{$page}></div></td>
			  </tr>
    </table></td>
  </tr>
</table>


</body>
</html>
