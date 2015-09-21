<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");

$sql = "select id,area_name from area where parent_id<>0";
$areaList = $conn->GetArray($sql);
$smarty->assign("areaList",$areaList);
$stuName = "";
$parentName = "";
$mobile = "";
$area = "";
$where = " where 1=1 ";

if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from student where id=$value";		
		$rst = $conn->Execute($sql) or die("delete all error");
	}
}
else if($_GET['action'] == 'search')
{
	$stuName = $_POST["stuName"];
	$parentName = $_POST["parentName"];
	$mobile = $_POST["mobile"];
	$area = $_POST["city"];
	
	if($stuName != "") $where = $where." and stu_name like '%$stuName%'";
	if($parentName != "") $where = $where." and parent_name like '%$parentName%'";
	if($mobile != "") $where = $where." and mobile like '%$mobile%'";
	if($area != "") $where = $where." and city='$area'";
}

$smarty->assign("stuName",$stuName);
$smarty->assign("parentName",$parentName);
$smarty->assign("mobile",$mobile);
$smarty->assign("area",$area);

$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$pageSize = 16;
$sql = "select count(*) as sumCount from student ".$where;
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select id,stu_name,stu_sex,stu_birthday,parent_type,parent_name,city,mobile,home_tel,school_email,date_format(add_time,'%Y-%m-%d') addTime from student ".$where." order by add_time desc,id desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$studentList = $rst->GetArray();
$smarty->assign("studentList",$studentList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("managestu.php",$currentPage,$totalPage));

$smarty->display("Admin/user/managestu.tpl");


?>