<?php /* Smarty version Smarty-3.1.9, created on 2013-09-11 12:09:02
         compiled from "C:\wamp\www\calling\Smarty\templates\Admin\user\feelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2199352305d5e88aab8-28493886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86c494d1950499e877194ab978f85ff2997f7ed7' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\Admin\\user\\feelist.tpl',
      1 => 1378542905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2199352305d5e88aab8-28493886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feeList' => 0,
    'item' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_52305d5e95ec01_17646730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52305d5e95ec01_17646730')) {function content_52305d5e95ec01_17646730($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
	   	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">		    	
			<td height="30"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['schoolName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['userName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['fee'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['add_time'];?>
</td>
			<td><a href="feelist.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a></td>
		 </tr>
		 <?php } ?>
		 <tr><td colspan="7"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
			 <tr>
				<td colspan="7" bgcolor="#1D74CB" height="30" align="center"><div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
			  </tr>
    </table></td>
  </tr>
</table>


</body>
</html>
<?php }} ?>