<?php
$lifeTime =14400;
try   
{  
    session_start();  
    setcookie( session_name(), session_id(), time() + $lifeTime, "/" );  
}   
catch ( Exception $e )  
{  
    session_set_cookie_params( $lifeTime );  
    session_start();  
}  

session_register('userName');
require_once("../Config.Inc.php");
$action = $_GET["action"];

if($action != null && $action != "" && $action =="login")
{
	$email = $_POST["txtUserName"];
	$pwd = $_POST["txtPwd"];
	
	$sql = "select email,pwd from school";
	$userList = $conn->GetArray($sql);
	
	for($i=0;$i<count($userList);$i++)
	{
		if($userList[$i]["email"] != null && $userList[$i]["email"] != "" && $userList[$i]["email"] == $email && $userList[$i]["pwd"] == $pwd)
		{
			
			$_SESSION['userName'] = $email;
			echo "<script type='text/javascript' language='javascript'>alert('session:".$_SESSION['userName']."email:".$email."');window.location.href='index.php';</script>";
		}
	}
}
?>