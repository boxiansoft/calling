<?php
require_once("Config.Inc.php");
require_once("common/menu.php");


$sql="select content from about where id = 1";
$rst = $conn->Execute($sql) ;
$about = $rst->fields["content"];
$about = substr($about,0,strpos($about,'</p>')+4);
$smarty->assign("companyDetail",$about);

$sql="select id,title,date_format(addTime,'%Y.%m.%d') addTime from news where classID = 46 order by orderby desc,addTime desc limit 0,4";
$rst = $conn->Execute($sql);
$indexNewsList = $rst->GetArray();
$smarty->assign("indexNewsList",$indexNewsList);

$sql="select id,title,date_format(addTime,'%Y.%m.%d') addTime from news where classID = 41 order by orderby desc,addTime desc limit 0,4";
$rst = $conn->Execute($sql);
$indexWiseList = $rst->GetArray();
$smarty->assign("indexWiseList",$indexWiseList);

$smarty->display("index.tpl");
?>