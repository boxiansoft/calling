<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");


if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from service where id=$value";		
		$rst = $conn->Execute($sql) or die("delete all error");
	}
}


$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$pageSize = 16;
$sql = "select count(*) as sumCount from service";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select service.id,class.title className,service.service_order,service.keywords,date_format(service.addTime,'%Y-%m-%d') addTime from service left join class on class.id=service.classID where class.firstID=24 order by service.classID, service.service_order desc,service.addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$serviceList = $rst->GetArray();
$smarty->assign("serviceList",$serviceList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("managerfeature.php",$currentPage,$totalPage));

$smarty->display("Admin/managerfeature.tpl");


?>