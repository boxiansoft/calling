<?php
require_once("Config.Inc.User.php");
$email = $_SESSION["userName"];

$sql = "select area,courseOne,courseTwo,courseThree,courseFour,courseFive,courseSix,courseSeven,courseEight,courseNine from school where email='$email'";
$rst = $conn->Execute($sql);
$areaList = split(",",$rst->fields["area"]);
$courseOneList = split(",",$rst->fields["courseOne"]);
$courseTwoList = split(",",$rst->fields["courseTwo"]);
$courseThreeList = split(",",$rst->fields["courseThree"]);
$courseFourList = split(",",$rst->fields["courseFour"]);
$courseFiveList = split(",",$rst->fields["courseFive"]);
$courseSixList = split(",",$rst->fields["courseSix"]);
$courseSevenList = split(",",$rst->fields["courseSeven"]);
$courseEightList = split(",",$rst->fields["courseEight"]);
$courseNineList = split(",",$rst->fields["courseNine"]);

$smarty->assign("areaList",$areaList);
$smarty->assign("courseOneList",$courseOneList);
$smarty->assign("courseTwoList",$courseTwoList);
$smarty->assign("courseThreeList",$courseThreeList);
$smarty->assign("courseFourList",$courseFourList);
$smarty->assign("courseFiveList",$courseFiveList);
$smarty->assign("courseSixList",$courseSixList);
$smarty->assign("courseSevenList",$courseSevenList);
$smarty->assign("courseEightList",$courseEightList);
$smarty->assign("courseNineList",$courseNineList);


if($_GET["action"] != null && $_GET["action"] != "")
{
	if($_GET["action"] == "search")
	{
		$areaSelectList = "";
		$courseOneSelectList = "";
		
		for($i=0;$i<count($areaList);$i++)
		{
			$area = $_POST["area_".$i];		
			if(strlen($area)>0)	$areaSelectList = $areaSelectList.$area.",";
		}
		
		for($i=0;$i<count($courseOneList);$i++)
		{
			$course = $_POST["course_one_".$i];		
			if(strlen($course)>0)	$courseOneSelectList = $courseOneSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseTwoList);$i++)
		{
			$course = $_POST["course_two_".$i];		
			if(strlen($course)>0)	$courseTwoSelectList = $courseTwoSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseThreeList);$i++)
		{
			$course = $_POST["course_three_".$i];		
			if(strlen($course)>0)	$courseThreeSelectList = $courseThreeSelectList.$course.",";
		}
	
		for($i=0;$i<count($courseFourList);$i++)
		{
			$course = $_POST["course_four_".$i];		
			if(strlen($course)>0)	$courseFourSelectList = $courseFourSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseFiveList);$i++)
		{
			$course = $_POST["course_five_".$i];		
			if(strlen($course)>0)	$courseFiveSelectList = $courseFiveSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseSixList);$i++)
		{
			$course = $_POST["course_six_".$i];		
			if(strlen($course)>0)	$courseSixSelectList = $courseSixSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseSevenList);$i++)
		{
			$course = $_POST["course_seven_".$i];		
			if(strlen($course)>0)	$courseSevenSelectList = $courseSevenSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseEightList);$i++)
		{
			$course = $_POST["course_eight_".$i];		
			if(strlen($course)>0)	$courseEightSelectList = $courseEightSelectList.$course.",";
		}
		
		for($i=0;$i<count($courseNineList);$i++)
		{
			$course = $_POST["course_nine_".$i];		
			if(strlen($course)>0)	$courseNineSelectList = $courseNineSelectList.$course.",";
		}
		
		$areaSelectList = substr($areaSelectList,0,strlen($areaSelectList)-1);		
		$courseOneSelectList = substr($courseOneSelectList,0,strlen($courseOneSelectList)-1);
		$courseTwoSelectList = substr($courseTwoSelectList,0,strlen($courseTwoSelectList)-1);
		$courseThreeSelectList = substr($courseThreeSelectList,0,strlen($courseThreeSelectList)-1);
		$courseFourSelectList = substr($courseFourSelectList,0,strlen($courseFourSelectList)-1);
		$courseFiveSelectList = substr($courseFiveSelectList,0,strlen($courseFiveSelectList)-1);
		$courseSixSelectList = substr($courseSixSelectList,0,strlen($courseSixSelectList)-1);
		$courseSevenSelectList = substr($courseSevenSelectList,0,strlen($courseSevenSelectList)-1);
		$courseEightSelectList = substr($courseEightSelectList,0,strlen($courseEightSelectList)-1);
		$courseNineSelectList = substr($courseNineSelectList,0,strlen($courseNineSelectList)-1);
		
		$areaList = split(",",$areaSelectList);
		$courseOneList = split(",",$courseOneSelectList); 
		$courseTwoList = split(",",$courseTwoSelectList);
		$courseThreeList = split(",",$courseThreeSelectList);
		$courseFourList = split(",",$courseFourSelectList);
		$courseFiveList = split(",",$courseFiveSelectList);
		$courseSixList = split(",",$courseSixSelectList);
		$courseSevenList = split(",",$courseSevenSelectList);
		$courseEightList = split(",",$courseEightSelectList);
		$courseNineList = split(",",$courseNineSelectList);
		
		$smarty->assign("areaSelectList",$areaList);
		$smarty->assign("courseOneSelectList",$courseOneList);
		$smarty->assign("courseTwoSelectList",$courseTwoList);
		$smarty->assign("courseThreeSelectList",$courseThreeList);
		$smarty->assign("courseFourSelectList",$courseFourList);
		$smarty->assign("courseFiveSelectList",$courseFiveList);
		$smarty->assign("courseSixSelectList",$courseSixList);
		$smarty->assign("courseSevenSelectList",$courseSevenList);
		$smarty->assign("courseEightSelectList",$courseEightList);
		$smarty->assign("courseNineSelectList",$courseNineList);
		
		$sql = "select id,stu_name,stu_sex,parent_name,parent_type,stu_birthday,city,school_email,add_time,school_email from student where ifnull(school_email,'')='' ";
		$where = "";
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
		
		if(count($areaList)>1)
		{
			for($i=0;$i<count($areaList);$i++)
			{
				$area = $area."'".$areaList[$i]."',";	
			}
			
			$area = substr($area,0,strlen($area)-1);
			$where = $where." and city in($area) ";
		}
		else if(count($areaList)==1 && $areaList[0] != null && $areaList[0] != "")
		{
			$where = $where." and city in('$areaList[0]')";
		}
		
		$where = $where." and (1=1 ";
		
		if(count($courseOneList)>1)
		{
			for($i=0;$i<count($courseOneList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseOneList[$i]."',courseOne) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseOneList[$i]."',courseOne)";
				}
			}
		}
		else if(count($courseOneList)==1 && $courseOneList[0] != null && $courseOneList[0] != "")
		{
			$where = $where." or find_in_set('".$courseOneList[0]."',courseOne)";
		}
		
		if(count($courseTwoList)>1)
		{
			for($i=0;$i<count($courseTwoList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseTwoList[$i]."',courseTwo) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseTwoList[$i]."',courseTwo)";
				}
								
				//$where = $where." or find_in_set('".$courseTwoList[$i]."',courseTwo)";
			}
		}
		else if(count($courseTwoList)==1 && $courseTwoList[0] != null && $courseTwoList[0] != "")
		{
			$where = $where." or find_in_set('".$courseTwoList[0]."',courseTwo)";
		}
		
		if(count($courseThreeList)>1)
		{
			for($i=0;$i<count($courseThreeList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseThreeList[$i]."',courseThree) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseThreeList[$i]."',courseThree)";
				}
								
				//$where = $where." or find_in_set('".$courseThreeList[$i]."',courseThree)";
			}
		}
		else if(count($courseThreeList)==1 && $courseThreeList[0] != null && $courseThreeList[0] != "")
		{
			$where = $where." or find_in_set('".$courseThreeList[0]."',courseThree)";
		}
		
		if(count($courseFourList)>1)
		{
			for($i=0;$i<count($courseFourList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseFourList[$i]."',courseFour) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseFourList[$i]."',courseFour)";
				}
				
				//$where = $where." or find_in_set('".$courseFourList[$i]."',courseFour)";
			}
		}
		else if(count($courseFourList)==1 && $courseFourList[0] != null && $courseFourList[0] != "")
		{
			$where = $where." or find_in_set('".$courseFourList[0]."',courseFour)";
		}
		
		if(count($courseFiveList)>1)
		{
			for($i=0;$i<count($courseFiveList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseFiveList[$i]."',courseFive) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseFiveList[$i]."',courseFive)";
				}
								
				//$where = $where." or find_in_set('".$courseFiveList[$i]."',courseFive)";
			}
		}
		else if(count($courseFiveList)==1 && $courseFiveList[0] != null && $courseFiveList[0] != "")
		{
			$where = $where." or find_in_set('".$courseFiveList[0]."',courseFive)";
		}
		
		if(count($courseSixList)>1)
		{
			for($i=0;$i<count($courseSixList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseSixList[$i]."',courseSix) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseSixList[$i]."',courseSix)";
				}
								
				//$where = $where." or find_in_set('".$courseSixList[$i]."',courseSix)";
			}
		}
		else if(count($courseSixList)==1 && $courseSixList[0] != null && $courseSixList[0] != "")
		{
			$where = $where." or find_in_set('".$courseSixList[0]."',courseSix)";
		}
		
		if(count($courseSevenList)>1)
		{
			for($i=0;$i<count($courseSevenList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseSevenList[$i]."',courseSeven) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseSevenList[$i]."',courseSeven)";
				}
				
				//$where = $where." or find_in_set('".$courseSevenList[$i]."',courseSeven)";
			}
		}
		else if(count($courseSevenList)==1 && $courseSevenList[0] != null && $courseSevenList[0] != "")
		{
			$where = $where." or find_in_set('".$courseSevenList[0]."',courseSeven)";
		}
		
		if(count($courseEightList)>1)
		{
			for($i=0;$i<count($courseEightList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseEightList[$i]."',courseEight) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseEightList[$i]."',courseEight)";
				}
							
				//$where = $where." or find_in_set('".$courseEightList[$i]."',courseEight)";
			}
		}
		else if(count($courseEightList)==1 && $courseEightList[0] != null && $courseEightList[0] != "")
		{
			$where = $where." or find_in_set('".$courseEightList[0]."',courseEight)";
		}
		
		if(count($courseNineList)>1)
		{
			for($i=0;$i<count($courseNineList);$i++)
			{
				if($i==0) 
				{
					$where = $where." or find_in_set('".$courseNineList[$i]."',courseNine) ";
				}
				else
				{
					$where = $where." or find_in_set('".$courseNineList[$i]."',courseNine)";
				}
								
				//$where = $where." or find_in_set('".$courseNineList[$i]."',courseNine)";
			}
		}
		else if(count($courseNineList)==1 && $courseNineList[0] != null && $courseNineList[0] != "")
		{
			$where = $where." or find_in_set('".$courseNineList[0]."',courseNine)";
		}
		
		$sql = $sql.$where.")";
		//echo $sql;
		$studentList = $conn->GetArray($sql);
		//print_r($studentList);
		$smarty->assign("studentList",$studentList);
		
	}
	else if($_GET["action"] == "receive" && isset($_GET["id"]) && intval($_GET["id"],10)>0)
	{
		$nowDate = date('Y-m-d H:i:s',time());
		$studentID = intval($_GET["id"],10);
		$sql = "select school_email from student where id=$studentID";		
		$rst = $conn->Execute($sql);

		if($rst->fields["school_email"]==null || $rst->fields["school_email"]=="")
		{	
			$sql = "select surplus_coupon from coupon where school_email='$email'";
			$rst = $conn->Execute($sql);
			if($rst->fields["surplus_coupon"] != null && $rst->fields["surplus_coupon"] != "" && intval($rst->fields["surplus_coupon"],10) > 0)
			{
				$conn->StartTrans();
				$sql = "update student set school_email='$email',get_time='$nowDate' where id=$studentID";
				$rst = $conn->Execute($sql);
				$sql = "update coupon set use_coupon=use_coupon+1,surplus_coupon=surplus_coupon-1 where school_email='$email'";
				$rst = $conn->Execute($sql);
				$sql = "select id from coupon where school_email='$email'";
				$rst = $conn->Execute($sql);
				$couponID = $rst->fields["id"];
				$sql = "select * from consume where id=0";
				$rst = $conn->Execute($sql);
				$record = array();
				$record["coupon_id"] = $couponID;
				$record["stu_id"] = $studentID;
				$record["consume_num"] = 1;
				$record["add_time"] = $nowDate;
				$update = $conn->getInsertSQL($rst,$record,true,true);
				$conn->Execute($update);
				
				if($conn->HasFailedTrans())
				{
					echo "<script type='text/javascript' language='javascript'>alert('领取失败');window.location.href='searchinfo.php'</script>";
				}
				else
				{
					echo "<script type='text/javascript' language='javascript'>alert('领取成功，可以到我的学生中查看');window.location.href='searchinfo.php'</script>";
				}
				
				$conn->CompleteTrans();
			}
			else
			{
				echo "<script type='text/javascript' language='javascript'>alert('余额不足，请充值！');window.location.href='searchinfo.php'</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript' language='javascript'>alert('已经被别人领取，您不能再领取');window.location.href='searchinfo.php'</script>";
		}
	}
}
else
{
	$sql = "select id,stu_name,stu_sex,parent_name,parent_type,stu_birthday,city,school_email,add_time from student where ifnull(school_email,'')='' or school_email='$email'";
	$studentList = $conn->GetArray($sql);
	$smarty->assign("studentList",$studentList);
}

$close = new Close($rst,$conn);
$smarty->display("user/searchinfo.tpl");
?>