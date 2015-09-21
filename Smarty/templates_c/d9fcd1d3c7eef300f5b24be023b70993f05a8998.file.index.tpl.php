<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 15:44:53
         compiled from "C:\wamp\www\calling\Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22177522decf5812ba7-58133094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fcd1d3c7eef300f5b24be023b70993f05a8998' => 
    array (
      0 => 'C:\\wamp\\www\\calling\\Smarty\\templates\\index.tpl',
      1 => 1378209970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22177522decf5812ba7-58133094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keyWords' => 0,
    'description' => 0,
    'title' => 0,
    'indexNewsList' => 0,
    'indexWiseList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522decf59763f2_18968342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522decf59763f2_18968342')) {function content_522decf59763f2_18968342($_smarty_tpl) {?><!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content=<?php echo $_smarty_tpl->tpl_vars['keyWords']->value;?>
 />
<meta http-equiv="description" content=<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link media=screen href="css/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/index_solid.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(".menu_body_bg ul li a").mouseover(function(){			
			$(this).css({"background":"url(images/menu_current_bg.png)"});
		})
		
		$(".menu_body_bg ul li a").mouseout(function(){			
			$(this).css({"background":"url()"});
		})		
	})
</script>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"memu"), 0);?>


<div class="index_main_body">
	<?php echo $_smarty_tpl->getSubTemplate ("common/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"flash"), 0);?>

	
	<div class="main1002 f_n">
		<div class="banner_bottom">
			<div class="index_employee">
				<div class="index_employee_bg">
					<div class="index_employee_title">我们的员工<font style=" color:#FC9D1C; font-size:12px; font-family:Arial, Helvetica, sans-serif">/Our staff</font></div>
					<div class="index_employee_pic"><img src="images/index_employee_pic.png" width="95" height="87" border="0"/></div>
					<ul>
						<li><a href="about.php?id=45">成为正式员工后可享受的福利：</a></li>
						<li><a href="about.php?id=45">1.按国家规定缴纳社会保险，</a></li>
						<li><a href="about.php?id=45">2.年度旅游、体检、聚餐、团</a></li>
						<li><a href="about.php?id=45">3.新人入职培训、员工进阶培</a></li>
					</ul>
				</div>
			</div>
			<div class="index_news">
				<div class="index_news_bg">
					<div class="index_employee_title">优尔通快讯<font style=" color:#FC9D1C; font-size:14px; font-family:Arial, Helvetica, sans-serif">/News</font></div>
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['name'] = 'newsList';
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['indexNewsList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total']);
?>
						<li style="width:300px;"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']+1;?>
.<a href="shownews.php?id=<?php echo $_smarty_tpl->tpl_vars['indexNewsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['indexNewsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']]['title'];?>
</a></li><li><?php echo $_smarty_tpl->tpl_vars['indexNewsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']]['addTime'];?>
</li>
						<?php endfor; endif; ?>
						<!--<li style="width:300px;">资生堂网络购物呼叫中心上线</li><li>2011.09.19 </li>
						<li style="width:300px;">主页已更新升级</li><li>2011.05.04 </li>
						<li style="width:300px;">VCS荣获中国最大人才公司“中智”授予的“理想雇主</li><li>2011.04.08</li>-->
					</ul>
				</div>
			</div>
			<div class="index_employee p_l_10">
				<div class="index_employee_bg">
					<div class="index_employee_title">名言警句<font style=" color:#FC9D1C; font-size:14px; font-family:Arial, Helvetica, sans-serif">/Famous aphorism</font></div>
					<div class="index_employee_pic"><img src="images/index_emplopee_pic.png" width="95" height="87" border="0"/></div>
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['name'] = 'newsList';
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['indexWiseList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['newsList']['total']);
?>
						<li><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']+1;?>
.<a href="shownews.php?id=<?php echo $_smarty_tpl->tpl_vars['indexWiseList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['indexWiseList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsList']['index']]['title'];?>
</a></li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</div>
</body>
</html>
<?php }} ?>