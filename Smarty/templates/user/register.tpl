<{config_load file="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><{#title#}></title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<style type="text/css">
.main{ width:100%; height:1300px; background-image:url(image/regist_bg.png);}
</style>
<script type="text/javascript" language="javascript" src="js/jquery-1.4.2.js"></script>
</head>

<body>
<div class="main">
	<div class="main770 f_n">
		<div class="main_border">
			<form action="register.php?action=add" method="post" name="regist" id="regist">
			<div class="main_bg">
				<div class="register_title"><span>申请加入会员</span></div>
				<div class="regist_memo">					
					<div class="regist_list">
						<div class="list_title">邮箱申请：</div>
						<div class="list_input"><input type="text" id="email" name="email" class="input_txt" /></div>
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
						<div class="list_title">地区：</div>		
						<ul>					
						<{foreach key=key item=item from=$areaList}>								
							<li><input type="checkbox" name="area_<{$item.id}>" value="<{$item.area_name}>"/><{$item.area_name}></li>								
						<{/foreach}>	
						</ul>						
					</div>
					<{section name=bigclass loop=$bigList}>
					<div class="regist_list">
						<div class="list_title"><{$bigList[bigclass].train_type}>：</div>
						<ul>
							<{section name=smallclass loop=$smallList}>
							<{if $smallList[smallclass].parent_id==$bigList[bigclass].id}>
							<li><input type="checkbox" name="course_<{$bigList[bigclass].id}>_<{$smallList[smallclass].id}>" value="<{$smallList[smallclass].train_type}>"/><{$smallList[smallclass].train_type}></li>
							<{/if}>
							<{/section}>
						</ul>
					</div>
					<{/section}>
					<div class="regist_list">
						<div class="list_title">验证码：</div>
						<div class="list_input"><input name="picCode" id="picCode" type="text" style="border:1px solid #CCCCCC; width:100px; height:20px; line-height:20px; vertical-align:middle;" /> <img src="../Manage/picCode.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" height="20" width="70"/></div>
						<input type="hidden" id="verif" name="verif" />
					</div>					
				</div>
			</div>
			<div class="regist_button"><input type="submit" value="马上注册" class="regist_submit"/></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
