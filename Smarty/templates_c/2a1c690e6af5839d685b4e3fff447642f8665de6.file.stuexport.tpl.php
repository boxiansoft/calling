<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 15:45:11
         compiled from "C:\wamp\www\calling\Smarty\templates\Admin\user\stuexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18534522ded07316247-41314996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1c690e6af5839d685b4e3fff447642f8665de6' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\Admin\\user\\stuexport.tpl',
      1 => 1378538667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18534522ded07316247-41314996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startDate' => 0,
    'endDate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522ded0739f632_86830241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ded0739f632_86830241')) {function content_522ded0739f632_86830241($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
        <td><input name="startDate" id="startDate" type="text" size="20" value="<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
"  onclick="WdatePicker({el:'startDate'})" /></td>
      </tr>
	  <tr>
        <td height="25" width="15%" align="right">结束时间：</td>
        <td><input name="endDate" id="endDate" type="text" size="20" value="<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
"  onclick="WdatePicker({el:'endDate'})" /></td>
      </tr>	  
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="left"><input name="submit" type="submit" value="立即导出"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
<?php }} ?>