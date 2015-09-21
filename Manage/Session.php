<?php
session_start();

if(empty($_SESSION['Admin']))
{	
	echo "<script language='javascript'>alert('连接超时！')</script>"; 
	$smarty->display("Admin/login.tpl");
}
?>