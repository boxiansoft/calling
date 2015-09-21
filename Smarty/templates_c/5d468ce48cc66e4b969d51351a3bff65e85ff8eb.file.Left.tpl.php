<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 15:45:08
         compiled from "C:\wamp\www\calling\Smarty\templates\Admin\Left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30367522ded04d6a6b8-16095633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d468ce48cc66e4b969d51351a3bff65e85ff8eb' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\Admin\\Left.tpl',
      1 => 1378625117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30367522ded04d6a6b8-16095633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aboutMenuList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522ded04ed2c42_35793905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ded04ed2c42_35793905')) {function content_522ded04ed2c42_35793905($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
	function diss(menu){
		if(document.getElementById(menu).style.display=="block")
		{
			document.getElementById(menu).style.display='none';
		}
		else if(document.getElementById(menu).style.display=="none")
		{
			document.getElementById(menu).style.display='block';
		}
	}
</script>

</head>

<body>
<div class="menu">
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="../" target="_blank"><b>进入网站首页</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="right.php" target='right'><b>返回后台首页</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="AdminManage.php" target="right"><b>管理员管理</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss2')"><b>机构管理</b></a></div>
		<div id="muss2" class="leftmenutd" style="display:none;">
			<div><a href="userlist.php" target="right">机构管理</a></div>
			<div><a href="feelist.php" target="right">财务明细</a></div>
			<div><a href="about.php?id=8" target="right">服务套餐</a></div>
			<div><a href="friendlist.php" target="right">朋友介绍</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss4')"><b>学生信息管理</b></a></div>
		<div id="muss4" class="leftmenutd" style="display:none;">
			<div><a href="addstu.php" target="right">添加学生信息</a></div>
			<div><a href="managestu.php" target="right">学生信息管理</a></div>
			<div><a href="stuexport.php" target="right">学生信息导出</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss1')"><b>关于帝满</b></a></div>
		<div id="muss1" class="leftmenutd" style="display:none;">	
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aboutMenuList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div><a href="about.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></div>
			<?php } ?>
		</div>
	</div>
	

	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss5')"><b>服务/特色</b></a></div>
		<div id="muss5" class="leftmenutd" style="display:none;">
			<!--<div><a href="FirstClass.php?firstID=2" target="right">类别管理</a></div>
			<div><a href="addservice.php" target="right">服务业务添加</a></div>-->
			<div><a href="managerservice.php" target="right">服务管理</a></div>
			<div><a href="managerfeature.php" target="right">特色管理</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss3')"><b>新闻管理</b></a></div>
		<div id="muss3" class="leftmenutd" style="display:none;">
			<div><a href="AddNews.php?classID=9" target="right">新闻添加</a></div>
			<div><a href="ManageNews.php" target="right">新闻管理</a></div>
			
		</div>
	</div>
	
	<!--<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss8')"><b>FLASH管理</b></a></div>
		<div id="muss8" class="leftmenutd" style="display:none;">
			<div><a href="addadv.php" target="right">FLASH管理</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss9')"><b>友情链接管理</b></a></div>
		<div id="muss9" class="leftmenutd" style="display:none;">
			<div><a href="addfriend.php" target="right">友情链接管理</a></div>
		</div>
	</div>-->
		
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="loginout.php" ><b>退出</b></a></div>
	</div>
</div>

</body>
</html>
<?php }} ?>