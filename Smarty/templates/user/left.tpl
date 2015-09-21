<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript">
	function diss(menu){
	if(document.getElementById(menu).style.display=="block"){
	document.getElementById(menu).style.display='none';
	}
	else if(document.getElementById(menu).style.display=="none"){
	document.getElementById(menu).style.display='block';
	}
	}
	
</script>

</head>

<body>
<div class="menu">	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="userinfo.php" target='right'><b>会员中心</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="right.php" target="right"><b>今日更新</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="update_password.php" target="right"><b>修改密码</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="coupon.php" target="right"><b>我的学生</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="recharge.php" target="right"><b>充值系统</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="searchinfo.php" target="right"><b>信息搜索</b></a></div>
	</div>
</div>

</body>
</html>
