<?php
session_start();

require_once ("../Config.Inc.php");

if(!empty($_SESSION['Admin']))
{
	$smarty->display("Admin/index.tpl");
}
else
{
	$smarty->display("Admin/login.tpl");
}
?>