<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content=<{$keyWords}> />
<meta http-equiv="description" content=<{$description}> />
<title><{$title}>-<{$newsTitle}></title>
<link media=screen href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/nav.js" type="text/javascript"></script>
<script src="js/Common.js" type="text/javascript"></script>
</head>
<body> 
<{include file="common/menu.tpl" name="menu"}>
<div class="main980 f_n">
	<{include file="common/flash.tpl" name="flash"}>
</div>

<div class="main980 f_n">
	<div class="indexLeft">
		<{include file="common/index_service.tpl" name="srvice"}>
		<{include file="common/index_friend.tpl" name="friedn"}>		
	</div>
	
	<div class="indexRight">
		<div class="indexAbout">
			<div class="indexAboutTitle"><span><{$newsTitle}></span></div>
			<div class="newsList">
				<ul>
				<{foreach item=item key=key from=$newsList}>
					<li><img src="images/news_arrow.gif" width="4" height="6" border="0"/>&nbsp;<a href="shownews.php?id=<{$item.id}>"><{$item.title}></a></li>
				<{/foreach}>
				</ul>
				<div class="page"><{$page}></div>
			</div>
		</div>
	</div>
</div>

<{include file="common/bottom.tpl" name="bottom"}>
</body>
</html>
