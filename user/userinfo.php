<?php
require_once("Config.Inc.User.php");

$sql = "select id,area_name from area where parent_id<>0";
$areaList = $conn->GetArray($sql);
$smarty->assign("areaList",$areaList);

$sql = "select id,train_type from course where parent_id=0";
$bigList = $conn->GetArray($sql);
$smarty->assign("bigList",$bigList);

$sql = "select id,train_type,parent_id from course where parent_id<>0";
$smallList = $conn->GetArray($sql);
$smarty->assign("smallList",$smallList);
$email = $_SESSION['userName'];

if($_GET['action']=="update")
{
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$telphone = $_POST['telphone'];
	$userName = $_POST['userName'];
	$area = "";
	$courseOne = "";
	$courseTwo = "";
	$courseThree = "";
	$courseFour = "";
	$courseFive = "";
	$courseSix = "";
	$courseSeven = "";
	$courseEight = "";
	$courseNine = "";
	
	for($i=0;$i<count($areaList);$i++)
	{
		$id=$areaList[$i]["id"];
		$area_temp = $_POST['area_'.$id];
		
		if($area_temp != null &&　area_temp != "")
		{
			$area=$area.$area_temp.",";
		}
	}
	
	$area = substr($area,0,strlen($area)-1);
	
	for($i=0;$i<count($bigList);$i++)
	{
		$course = "";
		
		
		for($j=0;$j<count($smallList);$j++)
		{
			if($bigList[$i]['id'] == $smallList[$j]['parent_id'])
			{					
				$courseName = "course_".$bigList[$i]['id']."_".$smallList[$j]['id'];
				$courseName = $_POST[$courseName];
				
				if($courseName != null && $courseName != "")
				{
					$course = $course.$courseName.",";
				}
			}
		}
		
		$course = substr($course,0,strlen($course)-1);
		
		switch($i)
		{
			case 0:
				$courseOne = $course;
				break;
			case 1:
				$courseTwo = $course;
				break;
			case 2:
				$courseThree = $course;
				break;
			case 3:
				$courseFour = $course;
				break;
			case 4:
				$courseFive = $course;
				break;
			case 5:
				$courseSix = $course;
				break;
			case 6:
				$courseSeven = $course;
				break;
			case 7:
				$courseEight = $course;
				break;
			case 8:
				$courseNine = $course;
				break;
		}
	}
	
	$sql = "select * from school where email='$email'";
	$rst = $conn->Execute($sql);
	$record = array();
	
	$record["schoolName"] = $name;
	$record["mobile"] = $mobile;
	$record["telphone"] = $telphone;
	$record["userName"] = $userName;
	$record["area"] = $area;
	$record["courseOne"] = $courseOne;
	$record["courseTwo"] = $courseTwo;
	$record["courseThree"] = $courseThree;
	$record["courseFour"] = $courseFour;
	$record["courseFive"] = $courseFive;
	$record["courseSix"] = $courseSix;
	$record["courseSeven"] = $courseSeven;
	$record["courseEight"] = $courseEight;
	$record["courseNine"] = $courseNine;
	$record["addTime"] = date('Y-m-d H:i:s',time());		
	$update = $conn->getUpdateSQL($rst,$record,true,true);
	
	if($conn->Execute($update))
	{
		$close = new Close($rst,$conn);
		echo "<script type='text/javascript' language='javascript'>alert('修改成功');window.location.href='userinfo.php';</script>";
	}
}

$sql="select * from school where email='$email'";
$rst = $conn->Execute($sql);
$smarty->assign("schoolName",$rst->fields["schoolName"]);
$smarty->assign("mobile",$rst->fields["mobile"]);
$smarty->assign("telphone",$rst->fields["telphone"]);
$smarty->assign("userName",$rst->fields["userName"]);
$smarty->assign("areaSelectList",split(",",$rst->fields["area"]));
$courseSelectList = $rst->fields["courseOne"].",".$rst->fields["courseTwo"].",".$rst->fields["courseThree"].",".$rst->fields["courseFour"].",".$rst->fields["courseFive"].",".$rst->fields["courseSix"].",".$rst->fields["courseSeven"].",".$rst->fields["courseEight"].",".$rst->fields["courseNine"];
$smarty->assign("courseSelectList",split(",",$courseSelectList));

$smarty->display("user/userinfo.tpl");
?>