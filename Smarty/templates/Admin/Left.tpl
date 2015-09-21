<{config_load file ="Admin.conf"}>
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
			<{foreach key=key item=item from=$aboutMenuList}>
			<div><a href="about.php?id=<{$item.id}>" target="right"><{$item.title}></a></div>
			<{/foreach}>
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
