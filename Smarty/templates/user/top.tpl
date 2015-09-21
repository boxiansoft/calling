<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
body{font-size:12px;margin:0;padding:0; background-image:url(image/top.png); background-repeat:no-repeat;}
ul{ padding:0; margin:0;}
ul li{ list-style:none;}
.logo{float:left; width:500px; line-height:50px; vertical-align:middle; padding-left:10px;font-size:20px;vertical-align:middle;color:#FFFFFF;font-weight:bold;}
.menu_top{ float:right;}
.menu_top a{ text-decoration:none; color:#333333}
.menu_top ul{ float:left;}
.menu_top ul li{ float:left; width:74px; text-align:center; line-height:22px; vertical-align:middle;}
.user_detail{ float:left; width:600px; font-size:12px; color:#000000; line-height:20px; vertical-align:middle; font-weight:100; padding-top:25px; padding-left:10px;}
.user_detail ul{ float:left;}
.user_detail ul li{ float:left;padding-left:5px; line-height:20px;vertical-align:middle;}
</style>
</head>

<body>
<div class="main">
<div class="menu_top">
	<ul>
		<li><a href="../index.php" target="_blank">首页</a></li>
		<li><a href="../about.php?id=43" target="_blank">关于我们</a></li>
		<li><a href="../contact.php?id=35" target="_blank">联系我们</a></li>
		<li><a href="loginout.php">注销系统</a></li>
	</ul>
</div>

</div>
<div class="logo"><{#AdminTitle#}><div>
<div class="user_detail">
	<ul>
		<li>用户：</li>
		<li><{$smarty.session.userName}></li>
	</ul>
</div>
</body>
</html>
