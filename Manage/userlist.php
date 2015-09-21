<?php
require_once("Admin.Config.Inc.php");
require_once("authority.php");

require_once("page.php");


if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from school where id=$value";		
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
$sql = "select count(*) as sumCount from school";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select id,email,schoolName,userName,mobile,date_format(addTime,'%Y-%m-%d') addTime from school order by addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$userList = $rst->GetArray();
$smarty->assign("userList",$userList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("userlist.php",$currentPage,$totalPage));

$smarty->display("Admin/user/userlist.tpl");


?>