<?php /* Smarty version Smarty-3.1.9, created on 2013-09-09 15:44:53
         compiled from "common\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8390522decf599a807-46274605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05aa1a350fde155fba65b4ce9ffad41dd7900f0' => 
    array (
      0 => 'common\\menu.tpl',
      1 => 1378542129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8390522decf599a807-46274605',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_522decf59a5f10_35406105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522decf59a5f10_35406105')) {function content_522decf59a5f10_35406105($_smarty_tpl) {?><div class="main_top">
	<div class="main1002 f_n">
		<div class="logo"><a href="/"><img src="images/logo.png" width="115" height="69" border="0"/></a></div>
		<div class="logo_right">
			<div class="search_list">
				<div class="current_time">
					<span style="float:left">当前时间：<script>document.write(new Date().getFullYear()+"年"+(new Date().getMonth()+1)+"月"+new Date().getDate()+"日 ");</script></span>
					<span style="float:left; padding-left:3px;" id="time"></span><script>setInterval("time.innerHTML=new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()",1000);</script></div>
				<div class="search">
					<form name="form1" action="search.php" method="post">
						<div class="search_txt"><input type="text" name="title" class="search_input"/></div>
						<div class="search_submit"><input type="button" value="" class="search_button"/></div>
					</form>
				</div>				
			</div>
			<div class="login"><a href="user/login.php"><img src="images/login_button.png" width="112" height="48" border="0"/></a></div>
		</div>
	</div>
</div>
<div class="menu">
	<div class="main1002 f_n">
		<div class="menu_body_bg">
			<ul>
				<li id="index"><a href="index.php">优尔通首页</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="about"><a href="about.php?id=43">关于优尔通</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="service"><a href="service.php?id=16">优尔通服务</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="feature"><a href="feature.php?id=25">优尔通特色</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="occupation"><a href="occupation.php?id=38">服务行业</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="question"><a href="question.php?id=40">常见问题</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
				<li id="contact"><a href="contact.php?id=35">联系我们</a><img src="images/shuxian.png" width="2" height="36" border="0"/></li>
			</ul>
			<div class="recommend"><a href="present.php?id=1"><img src="images/commend.png" width="96" height="71" border="0"/></a></div>
		</div>
	</div>
</div><?php }} ?>