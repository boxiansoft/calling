<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><{#title#}></title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
<div class="main">
	<div class="main680 f_n">
		<div class="mainBody">
			<div class="login">
			<form name="login" action="login.php?action=login" method="post">
				<ul>
					<li><input type="text" name="txtUserName" class="inputText defaultTitle" value="请使用邮箱登陆" onclick="javascript:this.value=''"/>&nbsp;&nbsp;<a href="register.php">申请加入会员</a></li>
					<li><input type="password" name="txtPwd" class="inputText"/>&nbsp;&nbsp;<a href="forget.php">忘记密码</a></li>
					<li><input type="submit" value="" class="loginSumbit"/></li>
					<li><input type="reset" value="" class="loginReset"/></li>
				</ul>
			</form>
			</div>
		</div>	
	</div>
</div>
</body>
</html>
