<?php
$sql = "select id,title from class where firstID=34 order by orderby asc";
$contactList = $conn->GetArray($sql);
$smarty->assign("contactList",$contactList);
?>