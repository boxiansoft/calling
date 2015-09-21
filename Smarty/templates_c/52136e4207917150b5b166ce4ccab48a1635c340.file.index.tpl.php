<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 15:45:08
         compiled from "C:\wamp\www\calling\Smarty\templates\Admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23793522ded048d5c61-07957639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52136e4207917150b5b166ce4ccab48a1635c340' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\Admin\\index.tpl',
      1 => 1363007490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23793522ded048d5c61-07957639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522ded04957f01_35510514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ded04957f01_35510514')) {function content_522ded04957f01_35510514($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
</head>

<frameset rows="80,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="200,*" framespacing="0" frameborder="no" border="0">
    <frame src="Left.php" name="leftmenu" id="mainFrame" title="mainFrame" scrolling="yes" />
    <frameset rows="50,*" cols="*" framespacing="0" frameborder="no" border="0">
    <frame src="menu.php" name="topmenu" id="mainFrame" title="mainFrame" />
    <frame src="right.php" name="right" scrolling="yes" noresize="noresize" id="right" title="right" />
  </frameset>
  </frameset>
</frameset><noframes></noframes>
<noframes>
</html>
<?php }} ?>