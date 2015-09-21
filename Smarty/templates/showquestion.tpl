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
	})
</script>
</head>
<body> 
<{include file="common/menu.tpl" name="memu"}>

<div class="index_main_body">	
	<div class="main1002 f_n">
		<div class="daohang">
			<img src="images/icon.png" width="5" height="5" border="0"/>&nbsp;&nbsp;<a href="index.php">首页</a>&nbsp;>&nbsp;
			<a href="question.php?id=<{$smarty.get.id}>">
			<{if $smarty.get.id == 40}>常见问题<{else}>警句名言<{/if}>
			</a>&nbsp;>&nbsp;<{$showNewsTitle}>
		</div>
		
		<{include file="common/question_left.tpl" name="question_left"}>
		
		<div class="about_right_list">
			<div class="about_right_title"><img src="images/about_top_menu_left.png" width="3" height="13" border="0"/>
			<span class="about_right_title_cn"><{if $smarty.get.id == 40}>常见问题<{else}>警句名言<{/if}></span>
			</div>
			<div class="about_right_title_bottom"><img src="images/about_top_title_bottom.png" width="753" height="2" border="0"/></div>
			<div class="about_right_top_pic">
			<{if $smarty.get.id == 40}>
			<img src="images/question_top_001.png" width="754" height="141" border="0"/>
			<{else}>
			<img src="images/famous_top_pic.png" width="754" height="141" border="0"/>
			<{/if}>
			</div>
			<div class="about_right_memo">
				<div class="about_right_memo_pic"><span><{$showNewsTitle}></span></div>
				<div class="about_right_memo_detail">
					<div class="showNews_title"><span><{$showNewsTitle}></span></div>
					<div class="showNews_from">发布：<{$showNewsFrom}></div>
					<div class="showNews_addTime">发布时间：<{$showNewsAddTime}></div>
					<div class="about_right_memo_content"><{$showNewsMemo}></div>
				</div>
			</div>
		</div>
	</div>
	
	<{include file="common/bottom.tpl" name="bottom"}>
</div>
</body>
</html>
