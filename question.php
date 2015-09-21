<?php
require_once("Config.Inc.php");
require_once("common/question_left.php");
require_once("common/menu.php");

$id = 40;
if(isset($_GET['id']) && intval($_GET['id'],10)>0)
{
	$id = $_GET['id'];
}

$sql = "select title,en_title,pic from class where id=$id";
$rst = $conn->Execute($sql);
$smarty->assign("currentTitle",$rst->fields["title"]);
$smarty->assign("currentEnTitle",$rst->fields["en_title"]);
$smarty->assign("aboutTopPic",$rst->fields["pic"]);

$sql = "select id,title,addTime from news where classID=$id order by orderby desc,addTime desc";
$aboutNewsList = $conn->GetArray($sql);
$smarty->assign("aboutNewsList",$aboutNewsList);


$smarty->display("question.tpl");
?>