<?php
session_start();

unset($_SESSION['admin']);
session_destroy();
echo "<script language='javascript'>parent.location.href='login.php';</script>";
?>