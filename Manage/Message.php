<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");


if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from message where id=$value";		
		$rst = $conn->Execute($sql) or die("delete all error");
	}
}

if($_GET["action"] == "deleteMessage")
{
	$messageID = $_GET["id"];
	$sql="delete from message where id=$messageID";		
	$rst = $conn->Execute($sql) or die("delete all error");	
}


$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$pageSize = 16;
$sql = "select count(*) as sumCount from message";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select id,userName,mobile,email,addTime from message order by addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$messageList = $rst->GetArray();
$smarty->assign("messageList",$messageList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("Message.php",$currentPage,$totalPage));

$smarty->display("Admin/Message.tpl");


?>