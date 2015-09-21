<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>无标题文档</title>
</head>

<body>
<div class="main770 f_n">
	<div class="top_border"><span>修改密码</span></div>
	<div class="middle_border">
		<form name="regist" id="regist" action="update_password.php?action=update" method="post">
		<div class="regist_memo">
			<div class="regist_list">
				<div class="list_title">邮箱申请：</div>
				<div class="list_input"><input type="text" id="email" name="email" class="input_txt" disabled="disabled" value="<{$smarty.session.userName}>"/></div>
			</div>
			<div class="regist_list">
				<div class="list_title">原始密码：</div>
				<div class="list_input"><input type="text" id="oldPwd" name="oldPwd" class="input_txt" value="" /></div>
			</div>
			<div class="regist_list">
				<div class="list_title">新&nbsp;密&nbsp;码：</div>
				<div class="list_input"><input type="text" id="pwd" name="pwd" class="input_txt" value="" /></div>
			</div>
		</div>
		<div class="regist_button"><input type="submit" value="马上修改" class="regist_submit"/></div>
		</form>
	</div>
</div>
</body>
</html>
