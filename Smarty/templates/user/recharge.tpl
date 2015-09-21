<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" language="javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(".couponBorder").mouseover(function(){$(this).css("background","EFEEEB")})
		$(".couponBorder").mouseout(function(){$(this).css("background","white")})
	})
</script>
<title>无标题文档</title>
</head>

<body>
<div class="main770 f_n">
	<div class="top_border"><span>充值记录</span></div>
	<div class="middle_border">
		<div class="couponList">			
			<ul class="couponTitle">
				<li style="width:100px;">金额</li>
				<li style="width:150px;">充值时间</li>
				<li style="width:150px;">充值账号</li>
			</ul>
			<{foreach item=item key=key from=$rechargeList}>
			<ul class="couponBorder">
				<li style="width:100px;"><{$item.fee}></li>
				<li style="width:150px;"><{$item.add_time}></li>
				<li style="width:150px;"><{$item.school_email}></li>
			</ul>
			<{/foreach}>
		</div>
		<div class="page"><{$page}></div>
	</div>
</div>
</body>
</html>
