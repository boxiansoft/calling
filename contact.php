<?php
require_once("Config.Inc.php");
require_once("common/menu.php");
require_once("common/contact_left.php");

if(isset($_GET['id']) && intval($_GET['id'],10)>0)
{
	$id = $_GET['id'];
	$sql = "select title,en_title,pic from class where id=$id";
	$rst = $conn->Execute($sql);
	$smarty->assign("currentTitle",$rst->fields["title"]);
	$smarty->assign("currentEnTitle",$rst->fields["en_title"]);
	$smarty->assign("aboutTopPic",$rst->fields["pic"]);
	
	$sql="select content from about where orderby=$id";
	$rst=$conn->Execute($sql) or die("select service error");
	$content = $rst->fields["content"];
	
	$smarty->assign("aboutDetail",$content);
}

$smarty->display("contact.tpl");
?>