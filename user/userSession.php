<?php
session_start();

if($_SESSION['userName'] == null || $_SESSION['userName'] =="")
{
	echo "<script type='text/javascript' language='javascript'>alert('非法登录！');window.location.href='login.php';</script>";
}


?>