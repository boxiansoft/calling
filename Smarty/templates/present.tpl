<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content=<{$keyWords}> />
<meta http-equiv="description" content=<{$description}> />
<title><{$title}></title>
<link media=screen href="css/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(".menu_body_bg ul li a").mouseover(function(){			
			$(this).css({"background":"url(images/menu_current_bg.png)"});
		})
		
		$(".menu_body_bg ul li a").mouseout(function(){			
			$(this).css({"background":"url()"});
		})
		
		$("form").submit(function(e){
		if (document.message.picCode.value == "")
		{
			alert("请输入验证信息!");
			document.message.picCode.focus();
			return (false);
		} 
		else if (document.message.friend_name.value == "")
		{
			alert("请输您朋友的姓名!");
			document.message.friend_name.focus();
			return (false);
		} 
		else if(document.message.friend_mobile.value=="")
		{
			alert("请输入朋友的电话!");
			document.message.friend_mobile.focus();
			return (false);
		}
		else if(document.message.friend_email.value.length!=0)
		{
			if (document.message.friend_email.value.charAt(0)=="." || 
			document.message.friend_email.value.charAt(0)=="@"|| 
			document.message.friend_email.value.indexOf('@', 0) == -1 || 
			document.message.friend_email.value.indexOf('.', 0) == -1 || 
			document.message.friend_email.value.lastIndexOf("@") 　　
			　 ==document.message.friend_email.value.length-1 || 
			document.message.friend_email.value.lastIndexOf(".")
			==document.message.friend_email.value.length-1)
			{
			alert("朋友的电子邮件格式不正确！");
			document.message.friend_email.focus();
			return false;
			}
		}
		else if(document.message.friend_email.value.length==0)
		{
			alert("朋友的电子邮件不能为空！");
			document.message.friend_email.focus();
			return false;
		}
	});
	})
</script>
</head>
<body> 
<{include file="common/menu.tpl" name="memu"}>

<div class="index_main_body">	
	<div class="main1002 f_n">
		<div class="daohang">
			<img src="images/icon.png" width="5" height="5" border="0"/>&nbsp;&nbsp;<a href="index.php">首页</a>&nbsp;>&nbsp;介绍朋友
		</div>
		
		<{include file="common/about_left.tpl" name="about_left"}>
		
		<div class="about_right_list">
			<div class="about_right_title"><img src="images/about_top_menu_left.png" width="3" height="13" border="0"/><span class="about_right_title_cn">介绍朋友</span></div>
			<div class="about_right_title_bottom"><img src="images/about_top_title_bottom.png" width="753" height="2" border="0"/></div>
			<div class="about_right_top_pic"><img src="images/present_top_pic.png" width="754" height="141" border="0"/></div>
			<div class="about_right_memo">
				<div class="about_right_memo_pic"><span>介绍朋友</span></div>
				<div class="about_right_memo_detail">
					<div class="service_right_memo_content">
						<div class="present_list">
						<form name="message" id="message" action="reg_present.php?action=present" method="post">
							<ul>
								<li class="present_label_title">您的姓名：</li><li class="present_input"><input type="text" class="present_txt" name="userName"/></li>
							</ul>
							<ul>
								<li class="present_label_title">您的公司名称：</li><li class="present_input"><input type="text" class="present_txt" name="companyName"/></li>
							</ul>
							<ul>
								<li class="present_label_title">您的手机：</li><li class="present_input"><input type="text" class="present_txt" name="mobile"/></li>
							</ul>
							<ul>
								<li class="present_label_title">您的电子邮件：</li><li class="present_input"><input type="text" class="present_txt" name="email"/></li>
							</ul>
							<ul>
								<li class="present_label_title">朋友的姓名：</li><li class="present_input"><input type="text" class="present_txt" name="friend_name"/></li>
							</ul>
							<ul>
								<li class="present_label_title">朋友的电话：</li><li class="present_input"><input type="text" class="present_txt" name="friend_mobile"/></li>
							</ul>
							<ul>
								<li class="present_label_title">朋友的电子邮件：</li><li class="present_input"><input type="text" class="present_txt" name="friend_email"/></li>
							</ul>
							<ul>
								<li class="present_label_title">验证码：</li><li class="present_input"><input name="picCode" type="text" size="7" class="yanzhengma_txt" style=" height:18px; margin-top:5px;" /><img src="Manage/picCode.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" height="20" width="70" /></li>
							</ul>
							<ul>
								<li class="present_label_title"></li><li class="present_input"><input type="submit" class="present_submit" value=""/></li>
							</ul>
							<ul>
								<li class="present_label_title"></li><li class="present_input"><font style="color:#FF0000">*</font> 以上信息本公司不会用于除了这个活动的其他任何目的。所有个人资料将严格保密！</li>
							</ul>
							<ul>
								<li class="present_label_title"></li><li class="present_input">对每个介绍注册优尔通客户端的朋友，将给予100点卷的积分奖励！</li>
							</ul>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<{include file="common/bottom.tpl" name="bottom"}>
</div>
</body>
</html>
