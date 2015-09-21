<{config_load file = "Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<form id="form" name="form" action="?action=search" method="post">
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
  	<td>
		<table width="95%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td>学生姓名：<input type="text" size="15" value="<{$stuName}>" name="stuName"/></td>
			<td>家长姓名：<input type="text" size="15" value="<{$parentName}>" name="parentName"/></td>
			<td>手机号码：<input type="text" size="15" value="<{$mobile}>" name="mobile"/></td>
			<td>区域：
				<select name="city" style="width:100px">
					<option value="" selected="selected"></option>
					<{foreach item=item key=key from=$areaList}>
					<{if $item.area_name == $area}>
					<option value="<{$item.area_name}>" selected="selected"><{$item.area_name}></option>
					<{else}>
					<option value="<{$item.area_name}>"><{$item.area_name}></option>
					<{/if}>
					<{/foreach}>
				</select>
			</td>
			<td><input type="submit" style="width:80px;" value="查找" /></td>
		  </tr>
		</table>
	</td>
  </tr>
</table>
</form>
<form id="form" name="form" action="?action=allDel" method="post">
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30"  style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">学生信息管理中心</div></td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="12" height="5"></td>
      </tr>
      <tr>
        <td width="2%"></td><td width="10%">小朋友姓名</td><td width="6%">性别</td><td width="10%">小朋友生日</td><td width="6%">家长称呼</td><td width="10%">家长姓名</td><td width="6%">市</td><td width="10%">手机</td><td width="10%">住宅电话</td><td width="10%">添加时间</td><td width="10%">是否已被领取</td><td width="15%">操作</td>
      </tr>
	   <tr><td colspan="12"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
	   	  <{foreach key = key item = item from = $studentList}>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
		  <td align="left"><input name="selectid[]" type="checkbox" id="selectid" value="<{$item.id}>"></td>		  	
			<td height="30"><{$item.stu_name}></td>
			<td><{$item.stu_sex}></td>
			<td><{$item.stu_birthday}></td>
			<td><{$item.parent_type}></td>
			<td><{$item.parent_name}></td>
			<td><{$item.city}></td>
			<td><{$item.mobile}></td>
			<td><{$item.home_tel}></td>			
			<td><{$item.addTime}></td>
			<td><{$item.school_email}></td>
			<td><a href="addstu.php?id=<{$item.id}>">修改</a>&nbsp;|&nbsp;<a href="updatestu.php?action=deleteStu&id=<{$item.id}>">删除</a></td>
		 </tr>
		 <{/foreach}>
		 <tr><td colspan="12"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
		
		    <tr><td colspan="12" align="left"><input type="checkbox" name="checkbox2" value="Check All" onClick="allss()">全选 &nbsp;&nbsp;<input type="submit" name="Submit" value="删除选中内容" onClick="return scheck();"></td>
			 <tr>
			 <tr>
				<td colspan="12" bgcolor="#1D74CB" height="30" align="center"><div class="page"><{$page}></div></td>
			  </tr>
    </table></td>
  </tr>
</table>
</form>
<script language="javascript">
function scheck()
{
  if(!confirm('确认进行该操作吗？')) return false;
}

function allss()
{
   var abc = document.form.getElementsByTagName("input");
   if(abc[1].checked == true){
   for (var i=0; i<abc.length; i++)
      if (abc[i].type == "checkbox") abc[i].checked = false;
   }
   else
   {
   for (var i=0; i<abc.length; i++)
      if (abc[i].type == "checkbox") abc[i].checked = true;
   }
 }
</script>
</body>
</html>
