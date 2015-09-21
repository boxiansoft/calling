<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" language="javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$("form").submit(function(e){
			   if(document.regist.mobile.value.length==0)
				{
					alert("手机号码不能为空！");
					document.regist.mobile.focus();
					return (false);
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
<div class="main770 f_n">
	<div class="top_border"><span>会员中心</span></div>
	<div class="middle_border">
		<form name="regist" id="regist" action="userinfo.php?action=update" method="post">
		<div class="regist_memo">
			<!--<div class="regist_list">
				<div class="list_title">邮箱申请：</div>
				<div class="list_input"><input type="text" id="email" name="email" class="input_txt" disabled="disabled" value="<{$email}>"/></div>
			</div>-->
			
			<div class="regist_list">
				<div class="list_title">机构名称：</div>
				<div class="list_input"><input type="text" id="name" name="name" class="input_txt" value="<{$schoolName}>" /></div>
			</div>
			<div class="regist_list">
				<div class="list_title">手机号码：</div>
				<div class="list_input"><input type="text" id="mobile" name="mobile" class="input_txt" value="<{$mobile}>"/></div>
			</div>
			<div class="regist_list">
				<div class="list_title">学校电话：</div>
				<div class="list_input"><input type="text" name="telphone" class="input_txt" value="<{$telphone}>"/></div>
			</div>
			<div class="regist_list">
				<div class="list_title">联系人：</div>
				<div class="list_input"><input type="text" name="userName" class="input_txt" value="<{$userName}>"/></div>
			</div>
			<div class="regist_list">
				<div class="list_title">地区：</div>		
				<ul>					
				<{section name=area loop=$areaList}>	
					<{$flag = "false"}>
					<{section name=selectName loop=$areaSelectList}>
						<{if $areaList[area].area_name == $areaSelectList[selectName]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="area_<{$areaList[area].id}>" value="<{$areaList[area].area_name}>"/><{$areaList[area].area_name}></li>
					<{else}>
						<li><input type="checkbox" name="area_<{$areaList[area].id}>" value="<{$areaList[area].area_name}>"/><{$areaList[area].area_name}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{section name=bigclass loop=$bigList}>
			<div class="regist_list">
				<div class="list_title"><{$bigList[bigclass].train_type}>：</div>
				<ul>
					<{section name=smallclass loop=$smallList}>
					<{if $smallList[smallclass].parent_id==$bigList[bigclass].id}>
						<{$flag = "false"}>
						<{section name=selectName loop=$courseSelectList}>
							<{if $smallList[smallclass].train_type == $courseSelectList[selectName]}>					
								<{$flag = "true"}>
							<{/if}>
						<{/section}>
						<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_<{$bigList[bigclass].id}>_<{$smallList[smallclass].id}>" value="<{$smallList[smallclass].train_type}>"/><{$smallList[smallclass].train_type}></li>
						<{else}>
						<li><input type="checkbox" name="course_<{$bigList[bigclass].id}>_<{$smallList[smallclass].id}>" value="<{$smallList[smallclass].train_type}>"/><{$smallList[smallclass].train_type}></li>
						<{/if}>
					<{/if}>
					<{/section}>
				</ul>
			</div>
			<{/section}>	
		</div>
		<div class="regist_button"><input type="submit" value="马上修改" class="regist_submit"/></div>
		</form>
	</div>
</div>
</body>
</html>
