<?php
$sql = "select id,title from class where firstID=38 order by orderby asc";
$aboutList = $conn->GetArray($sql);
$smarty->assign("aboutList",$aboutList);
?>