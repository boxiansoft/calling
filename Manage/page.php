<?php

function page($url,$currentPage,$totalPage)
{
	$pageStr;
	$currentUrl;
	$tempUrl;
	
	if(strpos($url,"?"))
	{
		$strLen = strpos($url,"page");
		
		if($strLen > 0)
		{
			$tempUrl = substr($url,$strLen);
			
			if(strlen($tempUrl) > 8)//判断page后是否还有参数
			{
				$tempUrl = substr($tempUrl,(strpos($tempUrl,"&") + 1));
				$currentUrl = substr($url,0,$strLen).$tempUrl."&";
			}
			else
			{
				$currentUrl = substr($url,0,$strLen);
			}// end if
		}
		else
		{
			$currentUrl = $url."&";
		}// end if
	}
	else
	{
		$currentUrl = $url."?";
	}// end if
	

	if(($currentPage == 1) && ($currentPage == $totalPage))
	{
		$pageStr = $pageStr."<span>首页</span>"; 
		$pageStr = $pageStr."<span>上一页</span>";
		$pageStr = $pageStr."<span>下一页</span>";
		$pageStr = $pageStr."<span>最后一页</span>";
	}
	else if(($currentPage == 1) && ($currentPage != $totalPage))
	{
		$pageStr = $pageStr."<span>首页</span>"; 
		$pageStr = $pageStr."<span>上一页</span>";
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".($currentPage + 1)."'>下一页</a></span>";
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".$totalPage."'>最后一页</a></span>";
	}
	else if($currentPage > 1 && $currentPage < $totalPage)
	{
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=1'>首页</a></span>"; 
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".($currentPage - 1)."'>上一页</a></span>";
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".($currentPage + 1)."'>下一页</a></span>";
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".$totalPage."'>最后一页</a></span>";
	}
	else if(($currentPage == $totalPage) && ($currentPage != 1))
	{
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=1'>首页</a></span>"; 
		$pageStr = $pageStr."<span><a href = '".$currentUrl."page=".($currentPage - 1)."'>上一页</a></span>";
		$pageStr = $pageStr."<span>下一页</span>";
		$pageStr = $pageStr."<span>最后一页</span>";
	}
	
	return $pageStr;		
}
	
?>