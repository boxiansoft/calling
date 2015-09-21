<?php
require_once('Admin.Config.Inc.php');

$sql="select id,title from about where id<>8 and id<>7 order by orderby asc";
$aboutMenuList=$conn->GetArray($sql);
$smarty->assign("aboutMenuList",$aboutMenuList);

$sql="select id,menu from system";
$systemMenuList=$conn->GetArray($sql);
$smarty->assign("systemMenuList",$systemMenuList);

$smarty->display("Admin/Left.tpl");
?>