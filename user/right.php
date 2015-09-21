<?php
require_once("Config.Inc.User.php");
$email = $_SESSION['userName'];

$sql = "select area,courseOne,courseTwo,courseThree,courseFour,courseFive,courseSix,courseSeven,courseEight,courseNine from school where email='$email'";
$rst = $conn->Execute($sql);
$areaList;
$courseOne;
$courseTwo;
$courseThree;
$courseFour;
$courseFive;
$courseSix;
$courseSeven;
$courseEight;
$courseNine;
$stuArr;

if(strlen($rst->fields["area"])>1)
{
	$area = $rst->fields["area"];
	$areaList = split(",",$area);
	$area="";
	
	for($i=0;$i<count($areaList);$i++)
	{
		$area = $area."'".$areaList[$i]."',";
	}
	
	$area = substr($area,0,strlen($area)-1);
	$nowDate = date('Y-m-d',time());
	$sql = "select city,courseOne,courseTwo,courseThree,courseFour,courseFive,courseSix,courseSeven,courseEight,courseNine from student where city in($area) and date_format(add_time,'%Y-%m-%d') = '$nowDate'";
	$stuArr = $conn->GetArray($sql);
}

if(strlen($rst->fields["courseOne"])>1)
{
	$courseOne = split(",",$rst->fields["courseOne"]);
}

if(strlen($rst->fields["courseTwo"])>1)
{
	$courseTwo = split(",",$rst->fields["courseTwo"]);
}

if(strlen($rst->fields["courseThree"])>1)
{
	$courseThree = split(",",$rst->fields["courseThree"]);
}

if(strlen($rst->fields["courseFour"])>1)
{
	$courseFour = split(",",$rst->fields["courseFour"]);
}

if(strlen($rst->fields["courseFive"])>1)
{
	$courseFive = split(",",$rst->fields["courseFive"]);
}

if(strlen($rst->fields["courseSix"])>1)
{
	$courseSix = split(",",$rst->fields["courseSix"]);
}

if(strlen($rst->fields["courseSeven"])>1)
{
	$courseSeven = split(",",$rst->fields["courseSeven"]);
}

if(strlen($rst->fields["courseEight"])>1)
{
	$courseEight = split(",",$rst->fields["courseEight"]);
}


if(strlen($rst->fields["courseNine"])>1)
{
	$courseNine = split(",",$rst->fields["courseNine"]);
}

$table = "<table border='1' cellspacing='0' cellpadding='0'>";

for($i=0;$i<count($areaList);$i++)
{
	$sumRows = count($courseOne)+count($courseTwo)+count($courseThree)+count($courseFour)+count($courseFive)+count($courseSix)+count($courseSeven)+count($courseEight)+count($courseNine);
	$table = $table."<tr><td width='100' align='center' valign='middle' rowspan='".$sumRows."'>".$areaList[$i]."</td>";
	
	if(count($courseOne)>0)
	{
		$table = $table."<td width='150' align='center' valign='middle' rowspan='".count($courseOne)."'>早教中心</td>";
		
		for($one=0;$one<count($courseOne);$one++)
		{	
			if($one>0) $table = $table."<tr>";
			$table = $table."<td width='100' height='20' align='center' valign='middle'>".$courseOne[$one]."</td>";
			$num = 0;
			
			for($j=0;$j<count($stuArr);$j++)
			{
			
				if($areaList[$i] == $stuArr[$j]["city"] && strpos($stuArr[$j]["courseOne"],$courseOne[$one])>-1)
				{
					$num = $num + 1; 
				}
			}
			
			$table = $table."<td width='100' align='center' valign='middle'>".$num."</td></tr>";
		}
	}
		
	$table = $table.GetTable($courseTwo,"少儿外语",$stuArr,$areaList[$i],"courseTwo");
	$table = $table.GetTable($courseThree,"少儿才艺",$stuArr,$areaList[$i],"courseThree");
	$table = $table.GetTable($courseFour,"少儿舞蹈",$stuArr,$areaList[$i],"courseFour");
	$table = $table.GetTable($courseFive,"少儿音乐",$stuArr,$areaList[$i],"courseFive");
	$table = $table.GetTable($courseSix,"少儿体育",$stuArr,$areaList[$i],"courseSix");
	$table = $table.GetTable($courseSeven,"小学教育",$stuArr,$areaList[$i],"courseSeven");
	$table = $table.GetTable($courseEight,"中学教育",$stuArr,$areaList[$i],"courseEight");
	$table = $table.GetTable($courseNine,"其他",$stuArr,$areaList[$i],"courseNine");	
}

$table = $table."</table>";
$smarty->assign("todayUpdate",$table);

$smarty->display("user/right.tpl");
?>

<?php
function GetTable($course,$title,$stuArr,$areaList,$coursName)
{
	if(count($course)>0)
	{
		$table = $table."<tr>";
		$table = $table."<td width='150' align='center' valign='middle' rowspan='".count($course)."'>".$title."</td>";
		
		for($one=0;$one<count($course);$one++)
		{	
			if($one>0) $table = $table."<tr>";
			$table = $table."<td width='100' height='20' align='center' valign='middle'>".$course[$one]."</td>";
			$num = 0;
			
			for($j=0;$j<count($stuArr);$j++)
			{
				if($areaList == $stuArr[$j]["city"] && strpos($stuArr[$j][$coursName],$course[$one])>-1)
				{
					$num = $num + 1; 
				}
			}
			
			$table = $table."<td width='100' align='center' valign='middle'>".$num."</td></tr>";
		}
	}
	
	return $table;
}
?>