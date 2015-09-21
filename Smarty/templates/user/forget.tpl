<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><{#title#}></title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<style type="text/css">
.main{ width:100%; height:580px; background-image:url(image/regist_bg.png);}
</style>
<script type="text/javascript" language="javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$("form").submit(function(e){
			$.get("verif.php?action=" +  Math.random()+"&verif="+$("#picCode").val(),function(data,status){
					
				if(data.length==0)
				{
					alert("验证码有误");
					document.regist.picCode.focus();
					return false;
				}
				else if(document.regist.mobile.value.length==0)
				{
					alert("手机号码不能为空！");
					document.regist.mobile.focus();
					return false;
				}
				else if(document.regist.name.value.length==0)
				{
					alert("机构名称不能为空！");
					document.regist.name.focus();
					return false;
				}
				else if(document.regist.telphone.value.length==0)
				{
					alert("学校电话不能为空！");
					document.regist.telphone.focus();
					return false;
				}
				else if(document.regist.userName.value.length==0)
				{
					alert("联系人不能为空！");
					document.regist.userName.focus();
					return false;
				}
				else if(document.regist.email.value.length!=0)
				{
					if (document.regist.email.value.charAt(0)=="." || 
					document.regist.email.value.charAt(0)=="@"|| 
					document.regist.email.value.indexOf('@', 0) == -1 || 
					document.regist.email.value.indexOf('.', 0) == -1 || 
					document.regist.email.value.lastIndexOf("@") 　　
					　 ==document.regist.email.value.length-1 || 
					document.regist.email.value.lastIndexOf(".")
					==document.regist.email.value.length-1)
					{
					alert("邮箱的格式不正确！");
					document.regist.email.focus();
					return false;
					}
				}
				else if(document.regist.email.value.length==0)
				{
					alert("邮箱不能为空！");
					document.regist.email.focus();
					return false;
				}
			  });
		})
	})
</script>
</head>

<body>
<div class="main">
	<div class="main770 f_n">
		<div class="forget_main_border">
			<form name="regist" id="regist" action="forget.php?action=edit" method="post">
			<div class="forget_main_bg">
				<div class="register_title"><span>忘记密码</span></div>
				<div class="regist_memo">					
					<div class="regist_list">
						<div class="list_title">申请邮箱：</div>
						<div class="list_input"><input type="text" id="email" name="email" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">重置密码：</div>
						<div class="list_input"><input type="text" id="password" name="password" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">机构名称：</div>
						<div class="list_input"><input type="text" id="name" name="name" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">手机号码：</div>
						<div class="list_input"><input type="text" id="mobile" name="mobile" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">学校电话：</div>
						<div class="list_input"><input type="text" name="telphone" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">联系人：</div>
						<div class="list_input"><input type="text" name="userName" class="input_txt" /></div>
					</div>
					<div class="regist_list">
						<div class="list_title">验证码：</div>
						<div class="list_input"><input name="picCode" id="picCode" type="text" style="border:1px solid #CCCCCC; width:100px; height:20px; line-height:20px; vertical-align:middle;" /> <img src="../Manage/picCode.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" height="20" width="70"/></div>
						<input type="hidden" id="verif" name="verif" />
					</div>					
				</div>
			</div>
			<div class="regist_button"><input type="submit" value="重置密码" class="regist_submit"/></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
