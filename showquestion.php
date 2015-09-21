<?php
require_once("Config.Inc.php");
require_once("common/question_left.php");
require_once("common/menu.php");

if(isset($_GET["smallID"]))
{
	$id=$_GET["smallID"];
	$sql="select title,addTime,content from news where id=$id";
	$rst=$conn->Execute($sql);
	
	$smarty->assign("showNewsAddTime",$rst->fields["addTime"]);
	$smarty->assign("showNewsMemo",$rst->fields["content"]);
	$smarty->assign("showNewsFrom","优尔通");
	$smarty->assign("showNewsTitle",$rst->fields["title"]);
}

$smarty->display("showquestion.tpl");
?>