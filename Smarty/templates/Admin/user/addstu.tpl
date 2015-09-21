<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="../user/css/login.css">
<script type="text/javascript" src="../js/datecontrol/WdatePicker.js"></script>
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">学生信息编辑</div></td>
  </tr>
  <tr>
    <td><form name="add" id="add" action="updatestu.php?action=editerstu&id=<{$id}>" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
      <tr>
        <td height="25" width="15%" align="right">小朋友姓名：</td>
        <td><input name="stu_name" type="text" size="30" value="<{$stu_name}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">小朋友性别：</td>
        <td><input type="radio" name="stu_sex" value="男" checked="checked"/>男 &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="stu_sex" value="女"/>女</td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">小朋友出生日期：</td>
        <td><input name="stu_birthday" id="stu_birthday" type="text" size="30" value="<{$stu_birthday}>" onclick="WdatePicker({el:'stu_birthday'})"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">家长称呼：</td>
        <td><input name="parent_type" type="text" size="30" value="<{$parent_type}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">家长姓名：</td>
        <td><input name="parent_name" type="text" size="30" value="<{$parent_name}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">手机：</td>
        <td><input name="mobile" type="text" size="30" value="<{$mobile}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">电子邮件地址：</td>
        <td><input name="email" type="text" size="30" value="<{$email}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">省市：</td>
        <td>
			<select name="city" style="width:150px">
				<{foreach item=item key=key from=$areaList}>
				<{if $item.area_name == $area}>
				<option value="<{$item.area_name}>" selected="selected"><{$item.area_name}></option>
				<{else}>
				<option value="<{$item.area_name}>"><{$item.area_name}></option>
				<{/if}>
				<{/foreach}>
			</select>
		</td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">地址：</td>
        <td><input name="address" type="text" size="50" value="<{$address}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">邮政编码：</td>
        <td><input name="postal" type="text" size="30" value="<{$postal}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">办公室区号：</td>
        <td><input name="office_code" type="text" size="30" value="<{$office_code}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">办公室电话：</td>
        <td><input name="office_tel" type="text" size="30" value="<{$office_tel}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">办公室分机：</td>
        <td><input name="office_ext" type="text" size="30" value="<{$office_ext}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">住宅区号：</td>
        <td><input name="home_code" type="text" size="30" value="<{$home_code}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">住宅电话：</td>
        <td><input name="home_tel" type="text" size="30" value="<{$home_tel}>"/></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">住宅分机：</td>
        <td><input name="home_ext" type="text" size="30" value="<{$home_ext}>"/></td>
      </tr>
	  <tr>
        <td colspan="2">
			<div class="regist_memo">
				<{section name=bigclass loop=$bigList}>
					<div class="regist_list">
						<div class="list_title"><{$bigList[bigclass].train_type}>：</div>
						<ul>
							<{section name=smallclass loop=$smallList}>
							<{if $smallList[smallclass].parent_id==$bigList[bigclass].id}>
								<{$flag = "false"}>
								<{section name=selectName loop=$courseSelectList}>
									<{if $smallList[smallclass].train_type == $courseSelectList[selectName]}>
										<{$flag = "true"}>
									<{/if}>
								<{/section}>
								<{if $flag == "true"}>
								<li><input type="checkbox" checked="checked" name="course_<{$bigList[bigclass].id}>_<{$smallList[smallclass].id}>" value="<{$smallList[smallclass].train_type}>"/><{$smallList[smallclass].train_type}></li>
								<{else}>
								<li><input type="checkbox" name="course_<{$bigList[bigclass].id}>_<{$smallList[smallclass].id}>" value="<{$smallList[smallclass].train_type}>"/><{$smallList[smallclass].train_type}></li>
								<{/if}>
							<{/if}>
							<{/section}>
						</ul>
					</div>
			<{/section}>
			</div>
		</td>        
      </tr>
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="center"><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
