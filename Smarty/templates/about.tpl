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
			<img src="images/icon.png" width="5" height="5" border="0"/>&nbsp;&nbsp;<a href="index.php">首页</a>&nbsp;>&nbsp;<{$currentCnTitle}>
		</div>
		
		<{include file="common/about_left.tpl" name="about_left"}>
		
		<div class="about_right_list">
			<div class="about_right_title"><img src="images/about_top_menu_left.png" width="3" height="13" border="0"/><span class="about_right_title_cn"><{$currentTitle}></span><span class="about_right_title_en"><{$currentEnTitle}></span></div>
			<div class="about_right_title_bottom"><img src="images/about_top_title_bottom.png" width="753" height="2" border="0"/></div>
			<div class="about_right_top_pic"><img src="images/<{$aboutTopPic}>" width="754" height="141" border="0"/></div>
			<div class="about_right_memo">
				<div class="about_right_memo_pic"><span><{$currentTitle}></span></div>
				<div class="about_right_memo_detail">
					<{if $smarty.get.id != 46}>
					<div class="about_right_memo_content"><{$aboutDetail}></div>
					<{else}>
					<div class="about_news_list">
						<{foreach item=item key=key from=$aboutNewsList}>
						<ul>
							<li class="w_45">■</li>
							<li class="w_515"><a href="shownews.php?id=<{$item.id}>" target="_blank"><{$item.title}></a></li>
							<li class="w_130"><{$item.addTime}></li>
						</ul>
						<{/foreach}>
					</div>
					<div class="page"><{$page}></div>
					<{/if}>
				</div>
			</div>
		</div>
	</div>
	
	<{include file="common/bottom.tpl" name="bottom"}>
</div>
</body>
</html>
