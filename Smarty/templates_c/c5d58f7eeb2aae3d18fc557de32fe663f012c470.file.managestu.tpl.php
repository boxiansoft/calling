<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 22:32:39
         compiled from "C:\wamp\www\calling\Smarty\templates\Admin\user\managestu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24762522e4c876608c4-75402600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d58f7eeb2aae3d18fc557de32fe663f012c470' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\Admin\\user\\managestu.tpl',
      1 => 1378542685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24762522e4c876608c4-75402600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stuName' => 0,
    'parentName' => 0,
    'mobile' => 0,
    'areaList' => 0,
    'item' => 0,
    'area' => 0,
    'studentList' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522e4c879cb595_10493903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e4c879cb595_10493903')) {function content_522e4c879cb595_10493903($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
			<td>学生姓名：<input type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['stuName']->value;?>
" name="stuName"/></td>
			<td>家长姓名：<input type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['parentName']->value;?>
" name="parentName"/></td>
			<td>手机号码：<input type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
" name="mobile"/></td>
			<td>区域：
				<select name="city" style="width:100px">
					<option value="" selected="selected"></option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['areaList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['area_name']==$_smarty_tpl->tpl_vars['area']->value){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</option>
					<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</option>
					<?php }?>
					<?php } ?>
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
	   	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['studentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
		  <td align="left"><input name="selectid[]" type="checkbox" id="selectid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>		  	
			<td height="30"><?php echo $_smarty_tpl->tpl_vars['item']->value['stu_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['stu_sex'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['stu_birthday'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_type'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['home_tel'];?>
</td>			
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['addTime'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['school_email'];?>
</td>
			<td><a href="addstu.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a>&nbsp;|&nbsp;<a href="updatestu.php?action=deleteStu&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a></td>
		 </tr>
		 <?php } ?>
		 <tr><td colspan="12"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
		
		    <tr><td colspan="12" align="left"><input type="checkbox" name="checkbox2" value="Check All" onClick="allss()">全选 &nbsp;&nbsp;<input type="submit" name="Submit" value="删除选中内容" onClick="return scheck();"></td>
			 <tr>
			 <tr>
				<td colspan="12" bgcolor="#1D74CB" height="30" align="center"><div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
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
<?php }} ?>