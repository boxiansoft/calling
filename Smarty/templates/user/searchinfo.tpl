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
<style>
html,body{font-size:12px;margin:0px;height:100%;}
.mesWindow{border:#666 1px solid;background:#fff;}
.mesWindowTop{border-bottom:#eee 1px solid;margin-left:4px;padding:3px;font-weight:bold;text-align:left;font-size:12px;}
.mesWindowContent{margin:4px;font-size:12px;}
.mesWindow .close{height:15px;width:28px;border:none;cursor:pointer;text-decoration:underline;background:#fff}
</style>
<script type="text/javascript" language="javascript">
var isIe=(document.all)?true:false;
//设置select的可见状态
function setSelectState(state)
{
var objl=document.getElementsByTagName('select');
for(var i=0;i<objl.length;i++)
{
objl[i].style.visibility=state;
}
}
function mousePosition(ev)
{
if(ev.pageX || ev.pageY)
{
return {x:ev.pageX, y:ev.pageY};
}
return {
x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,y:ev.clientY + document.body.scrollTop - document.body.clientTop
};
}
//弹出方法
function showMessageBox(wTitle,content,pos,wWidth)
{
closeWindow();
var bWidth=parseInt(document.documentElement.scrollWidth);
var bHeight=parseInt(document.documentElement.scrollHeight);
if(isIe){
setSelectState('hidden');}
var back=document.createElement("div");
back.id="back";
var styleStr="top:0px;left:0px;position:absolute;background:#666;width:"+bWidth+"px;height:"+bHeight+"px;";
styleStr+=(isIe)?"filter:alpha(opacity=0);":"opacity:0;";
back.style.cssText=styleStr;
document.body.appendChild(back);
showBackground(back,50);
var mesW=document.createElement("div");
mesW.id="mesWindow";
mesW.className="mesWindow";
mesW.innerHTML="<div class='mesWindowTop'><table width='100%' height='100%'><tr><td>"+wTitle+"</td><td style='width:1px;'><input type='button' onclick='closeWindow();' title='关闭窗口' class='close' value='关闭' /></td></tr></table></div><div class='mesWindowContent' id='mesWindowContent'>"+content+"</div><div class='mesWindowBottom'></div>";
var v_top=(document.body.clientHeight-mesW.clientHeight)/2;
v_top+=document.documentElement.scrollTop;
styleStr="top:"+(v_top-230)+"px;left:"+(document.body.clientWidth/2-mesW.clientWidth/2)+"px;position:absolute;width:600px;margin-left:-300px;left:50%;z-index:9999;";
mesW.style.cssText=styleStr;
document.body.appendChild(mesW);
}
//让背景渐渐变暗
function showBackground(obj,endInt)
{
if(isIe)
{
obj.filters.alpha.opacity+=5;
if(obj.filters.alpha.opacity<endInt)
{
setTimeout(function(){showBackground(obj,endInt)},5);
}
}else{
var al=parseFloat(obj.style.opacity);al+=0.05;
obj.style.opacity=al;
if(al<(endInt/100))
{setTimeout(function(){showBackground(obj,endInt)},5);}
}
}
//关闭窗口
function closeWindow()
{
if(document.getElementById('back')!=null)
{
document.getElementById('back').parentNode.removeChild(document.getElementById('back'));
}
if(document.getElementById('mesWindow')!=null)
{
document.getElementById('mesWindow').parentNode.removeChild(document.getElementById('mesWindow'));
}
if(isIe){
setSelectState('');}
}
//测试弹出
function testMessageBox(ev,id)
{
	$.get("stuinfo.php?id="+id,function(data,status){
		var objPos = mousePosition(ev);
		messContent="<div style='padding:20px 0 20px 0;text-align:center'>"+data+"</div>";
		showMessageBox('学生信息',messContent,objPos,350);
		}
	)
}
</script>

</head>

<body>
<div class="main770 f_n">
	<div class="top_border"><span>信息搜索</span></div>
	<div class="middle_border">
		<form name="regist" id="regist" action="searchinfo.php?action=search" method="post">
		<div class="regist_memo">
			<div class="regist_list">
				<div class="list_title">地区：</div>		
				<ul>					
				<{section name=area loop=$areaList}>	
					<{$flag = "false"}>
					<{section name=selectName loop=$areaSelectList}>
						<{if $areaList[area] == $areaSelectList[selectName]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="area_<{$smarty.section.area.index}>" value="<{$areaList[area]}>"/><{$areaList[area]}></li>
					<{else}>
						<li><input type="checkbox" name="area_<{$smarty.section.area.index}>" value="<{$areaList[area]}>"/><{$areaList[area]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			
			<{if $courseOneList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">早教中心：</div>		
				<ul>					
				<{section name=course loop=$courseOneList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseOneSelectList}>
						<{if $courseOneList[course] == $courseOneSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_one_<{$smarty.section.course.index}>" value="<{$courseOneList[course]}>"/><{$courseOneList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_one_<{$smarty.section.course.index}>" value="<{$courseOneList[course]}>"/><{$courseOneList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseTwoList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">少儿外语：</div>		
				<ul>					
				<{section name=course loop=$courseTwoList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseTwoSelectList}>
						<{if $courseTwoList[course] == $courseTwoSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_two_<{$smarty.section.course.index}>" value="<{$courseTwoList[course]}>"/><{$courseTwoList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_two_<{$smarty.section.course.index}>" value="<{$courseTwoList[course]}>"/><{$courseTwoList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseThreeList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">少儿才艺：</div>		
				<ul>					
				<{section name=course loop=$courseThreeList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseThreeSelectList}>
						<{if $courseThreeList[course] == $courseThreeSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_three_<{$smarty.section.course.index}>" value="<{$courseThreeList[course]}>"/><{$courseThreeList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_three_<{$smarty.section.course.index}>" value="<{$courseThreeList[course]}>"/><{$courseThreeList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseFourList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">少儿舞蹈：</div>		
				<ul>					
				<{section name=course loop=$courseFourList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseFourSelectList}>
						<{if $courseFourList[course] == $courseFourSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_four_<{$smarty.section.course.index}>" value="<{$courseFourList[course]}>"/><{$courseFourList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_four_<{$smarty.section.course.index}>" value="<{$courseFourList[course]}>"/><{$courseFourList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseFiveList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">少儿音乐：</div>		
				<ul>					
				<{section name=course loop=$courseFiveList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseFiveSelectList}>
						<{if $courseFiveList[course] == $courseFiveSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_five_<{$smarty.section.course.index}>" value="<{$courseFiveList[course]}>"/><{$courseFiveList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_five_<{$smarty.section.course.index}>" value="<{$courseFiveList[course]}>"/><{$courseFiveList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseSixList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">少儿体育：</div>		
				<ul>					
				<{section name=course loop=$courseSixList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseSixSelectList}>
						<{if $courseSixList[course] == $courseSixSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_six_<{$smarty.section.course.index}>" value="<{$courseSixList[course]}>"/><{$courseSixList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_six_<{$smarty.section.course.index}>" value="<{$courseSixList[course]}>"/><{$courseSixList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseSevenList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">小学教育：</div>		
				<ul>					
				<{section name=course loop=$courseSevenList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseSevenSelectList}>
						<{if $courseSevenList[course] == $courseSevenSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_seven_<{$smarty.section.course.index}>" value="<{$courseSevenList[course]}>"/><{$courseSevenList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_seven_<{$smarty.section.course.index}>" value="<{$courseSevenList[course]}>"/><{$courseSevenList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseEightList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">中学教育：</div>		
				<ul>					
				<{section name=course loop=$courseEightList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseEightSelectList}>
						<{if $courseEightList[course] == $courseEightSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_eight_<{$smarty.section.course.index}>" value="<{$courseEightList[course]}>"/><{$courseEightList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_eight_<{$smarty.section.course.index}>" value="<{$courseEightList[course]}>"/><{$courseEightList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
			<{if $courseNineList|@count > 1 }>
			<div class="regist_list">
				<div class="list_title">其他：</div>		
				<ul>					
				<{section name=course loop=$courseNineList}>	
					<{$flag = "false"}>
					<{section name=selectCourse loop=$courseNineSelectList}>
						<{if $courseNineList[course] == $courseNineSelectList[selectCourse]}>					
							<{$flag = "true"}>
						<{/if}>
					<{/section}>					
					<{if $flag == "true"}>
						<li><input type="checkbox" checked="checked" name="course_nine_<{$smarty.section.course.index}>" value="<{$courseNineList[course]}>"/><{$courseNineList[course]}></li>
					<{else}>
						<li><input type="checkbox" name="course_nine_<{$smarty.section.course.index}>" value="<{$courseNineList[course]}>"/><{$courseNineList[course]}></li>		
					<{/if}>					
				<{/section}>	
				</ul>						
			</div>
			<{/if}>
			
		</div>
		<div class="regist_button"><input type="submit" value="马上搜索" class="regist_submit"/></div>
		</form>
		
		<div class="couponList">			
			<ul class="couponTitle">
				<li style="width:80px;">小朋友姓名</li>
				<li style="width:80px;">小朋友性别</li>
				<li style="width:60px;">家长称呼</li>
				<li style="width:80px;">家长姓名</li>
				<li style="width:90px;">小朋友生日</li>
				<li style="width:90px;">区域</li>
				<li style="width:80px;">上传时间</li>
				<li style="width:90px;">领取</li>
			</ul>
			<{foreach item=item key=key from=$studentList}>
			<ul class="couponBorder">
				<li style="width:80px;"><{$item.stu_name}>&nbsp;</li>
				<li style="width:80px;"><{$item.stu_sex}>&nbsp;</li>
				<li style="width:60px;"><{$item.parent_type}>&nbsp;</li>
				<li style="width:80px;"><{$item.parent_name}>&nbsp;</li>
				<li style="width:90px;"><{$item.stu_birthday}>&nbsp;</li>
				<li style="width:90px;"><{$item.city}>&nbsp;</li>
				<li style="width:80px;"><{$item.add_time}>&nbsp;</li>
				<li style="width:90px;">
					<{if $item.school_email!=''}>
					已领取&nbsp;|&nbsp;<a href="#" onclick="testMessageBox(event,'<{$item.id}>');">查看</a>
					<{else}>
					<a href="searchinfo.php?action=receive&id=<{$item.id}>">未领取</a>&nbsp;|&nbsp;查看
					<{/if}>
				</li>
			</ul>
			<{/foreach}>
		</div>
		<div class="page"><{$page}></div>
	</div>
</div>
</body>
</html>
