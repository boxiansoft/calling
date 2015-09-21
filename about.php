<?php
require_once("Config.Inc.php");
require_once("common/about_left.php");
require_once("common/menu.php");

$id = 0;

if(isset($_GET['id']) && intval($_GET['id'],10)>0)
{
	$id = intval($_GET['id'],10);
	$sql="select title,cn_title,en_title,pic,content from about where firstID = $id";
	$rst = $conn->Execute($sql) ;
	$smarty->assign("currentTitle",$rst->fields["title"]);
	$smarty->assign("currentEnTitle",$rst->fields["en_title"]);
	$smarty->assign("currentCnTitle",$rst->fields["cn_title"]);
	$smarty->assign("aboutTopPic",$rst->fields["pic"]);
	$smarty->assign("aboutDetail",$rst->fields["content"]);
}

if($id == 46)
{
	$sql = "select id,title,addTime from news where classID=$id order by orderby desc,addTime desc";
	$aboutNewsList = $conn->GetArray($sql);
	$smarty->assign("aboutNewsList",$aboutNewsList);
}

$smarty->display("about.tpl");
?>