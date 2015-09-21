<?php
if($_SESSION["Admin"] != "superadmin")
{
	echo "<script language='javascript'>alert('没有查看此功能的权限');window.location.href='right.php';</script>";
}
?>