<!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content=<{$keyWords}> />
<meta http-equiv="description" content=<{$description}> />
<title><{$title}></title>
<link media=screen href="css/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/index_solid.js"></script>
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
	<{include file="common/flash.tpl" name="flash"}>
	
	<div class="main1002 f_n">
		<div class="banner_bottom">
			<div class="index_employee">
				<div class="index_employee_bg">
					<div class="index_employee_title">我们的员工<font style=" color:#FC9D1C; font-size:12px; font-family:Arial, Helvetica, sans-serif">/Our staff</font></div>
					<div class="index_employee_pic"><img src="images/index_employee_pic.png" width="95" height="87" border="0"/></div>
					<ul>
						<li><a href="about.php?id=45">成为正式员工后可享受的福利：</a></li>
						<li><a href="about.php?id=45">1.按国家规定缴纳社会保险，</a></li>
						<li><a href="about.php?id=45">2.年度旅游、体检、聚餐、团</a></li>
						<li><a href="about.php?id=45">3.新人入职培训、员工进阶培</a></li>
					</ul>
				</div>
			</div>
			<div class="index_news">
				<div class="index_news_bg">
					<div class="index_employee_title">优尔通快讯<font style=" color:#FC9D1C; font-size:14px; font-family:Arial, Helvetica, sans-serif">/News</font></div>
					<ul>
						<{section name=newsList loop=$indexNewsList}>
						<li style="width:300px;"><{$smarty.section.newsList.index+1}>.<a href="shownews.php?id=<{$indexNewsList[newsList].id}>"><{$indexNewsList[newsList].title}></a></li><li><{$indexNewsList[newsList].addTime}></li>
						<{/section}>
						<!--<li style="width:300px;">资生堂网络购物呼叫中心上线</li><li>2011.09.19 </li>
						<li style="width:300px;">主页已更新升级</li><li>2011.05.04 </li>
						<li style="width:300px;">VCS荣获中国最大人才公司“中智”授予的“理想雇主</li><li>2011.04.08</li>-->
					</ul>
				</div>
			</div>
			<div class="index_employee p_l_10">
				<div class="index_employee_bg">
					<div class="index_employee_title">名言警句<font style=" color:#FC9D1C; font-size:14px; font-family:Arial, Helvetica, sans-serif">/Famous aphorism</font></div>
					<div class="index_employee_pic"><img src="images/index_emplopee_pic.png" width="95" height="87" border="0"/></div>
					<ul>
						<{section name=newsList loop=$indexWiseList}>
						<li><{$smarty.section.newsList.index+1}>.<a href="shownews.php?id=<{$indexWiseList[newsList].id}>"><{$indexWiseList[newsList].title}></a></li>
						<{/section}>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<{include file="common/bottom.tpl" name="bottom"}>
</div>
</body>
</html>
