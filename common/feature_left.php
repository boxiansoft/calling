<?php
$sql = "select id,title from class where firstID=24 order by orderby asc";
$serviceList = $conn->GetArray($sql);
$smarty->assign("serviceList",$serviceList);
?>