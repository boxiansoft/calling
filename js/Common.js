// JScript 文件
function IsIE()
{
    if (navigator.appName.indexOf("Explorer") > -1)
    {
        return true;
    } 
    else
    {
        return false;
    }
}
//留言反馈
function CheckFeedback(id)
{
  var username=document.getElementById("uname");
  var question=document.getElementById("title");
  var request=document.getElementById("content");
  //var phone=document.getElementById("tel");
 // var email=document.getElementById("email");
 // var address=document.getElementById("txtAddress");
  if(username.value=="" || username.value==null )
  {
   alert("用户名不能为空！");
   username.focus();
   return false;
  }
  
 /*if(phone.value=="" || phone.value==null)
  {
   alert("电话不能为空!");
   phone.focus();
   return false;
  }
   if(address.value=="" || address.value==null )
  {
   alert("地址不能为空Please enter your address");
   address.focus();
   return false;
  }
  
   if(!isEmail(email.value))
  {
   alert("邮箱格式不正确");
   email.focus();
   return false;
  }*/
   if(question.value=="" || question.value==null )
   {
   alert("标题不能为空");
   question.focus();
   return false;
  }
   if(request.value=="" || request.value==null )
  {
   alert("内容不能为空");
   request.focus();
   return false;
  }

  if(id==1)
	{
	   var code=document.getElementById("code");
	   if(code.value=="" || code.value==null )
	  {
	   alert("验证码不能为空");
	   code.focus();
	   return false;
	  }
   }

  return true;
}


//留言反馈
function CheckProFeedback(id)
{
  var username=document.getElementById("uname");
  var question=document.getElementById("title");
  var request=document.getElementById("content");
  var phone=document.getElementById("tel");
  var email=document.getElementById("email");
  var address=document.getElementById("addr");
  if(username.value=="" || username.value==null )
  {
   alert("联系人不能为空！");
   username.focus();
   return false;
  }
  
 if(phone.value=="" || phone.value==null)
  {
   alert("电话不能为空!");
   phone.focus();
   return false;
  }
  
   if(!isEmail(email.value))
  {
   alert("邮箱格式不正确");
   email.focus();
   return false;
  }
   if(address.value=="" || address.value==null )
  {
   alert("地址不能为空");
   address.focus();
   return false;
  }
  
   if(question.value=="" || question.value==null )
   {
   alert("公司名称不能为空");
   question.focus();
   return false;
  }
   if(request.value=="" || request.value==null )
  {
   alert("需求不能为空");
   request.focus();
   return false;
  }

  if(id==1)
	{
	   var code=document.getElementById("code");
	   if(code.value=="" || code.value==null )
	  {
	   alert("验证码不能为空");
	   code.focus();
	   return false;
	  }
   }

  return true;
}

//留言反馈
function CheckQA(id)
{
 
  var question=document.getElementById("title");
   if(question.value=="" || question.value==null )
  {
   alert("问题不能为空！");
   question.focus();
   return false;
  }
   if(id==1)
	{
	   var code=document.getElementById("code");
	   if(code.value=="" || code.value==null )
	  {
	   alert("验证码不能为空！");
	   code.focus();
	   return false;
	  }
   }

  return true;
}

//留言反馈
function CheckMessage()
{
 
  var title=document.getElementById("title");
  var content=document.getElementById("content");
   if(title.value=="" || title.value==null )
  {
   alert("请填写标题。");
   title.focus();
   return false;
  }
   if(content.value=="" || content.value==null )
  {
   alert("请填写内容。");
   content.focus();
   return false;
  }
  return true;
}

//供求留言
function CheckSupplyFeedback()
{
  var username=document.getElementById("txtUserName");
  var question=document.getElementById("txtQuestion");
  var request=document.getElementById("txtRequest");
  var phone=document.getElementById("txtPhone");
  var email=document.getElementById("txtEmail");
  var address=document.getElementById("txtAddress");
  var postcode=document.getElementById("txtPostcode");
  if(question.value=="" || question.value==null )
  {
   alert("Please enter title");
   question.focus();
   return false;
  }
  if(username.value=="" || username.value==null )
  {
   alert("Please enter name");
   username.focus();
   return false;
  }
  if(phone.value=="" || phone.value==null)
  {
   alert("Please enter phone");
   phone.focus();
   return false;
  }
  if(address.value=="" || address.value==null )
  {
   alert("Please enter address");
   address.focus();
   return false;
  }
  
   if(!isEmail(email.value))
  {
   alert("Please enter a valid email");
   email.focus();
   return false;
  }
   if(request.value=="" || request.value==null )
  {
   alert("Please enter content");
   request.focus();
   return false;
  }
   if(!isPostcode(postcode.value) )
  {
   alert("Please enter a valid postcode");
   postcode.focus();
   return false;
  }
  
  return true;
}
//产品，新闻评论
function CheckProductFeedback()
{
  var question=document.getElementById("txtQuestion");
  var request=document.getElementById("txtRequest");
  if(question.value=="" || question.value==null )
  {
   alert("Please enter title");
   question.focus();
   return false;
  }
   if(request.value=="" || request.value==null )
  {
   alert("Please enter content");
   request.focus();
   return false;
  }
  
  return true;
}

//用户注册
function CheckMember()
{
  var user=document.getElementById("txtUser");
  var password=document.getElementById("txtPassword");
  var repassword=document.getElementById("txtRePassword");
  var realname=document.getElementById("txtRealName");
  var question=document.getElementById("txtPassQuestion");
  var answer=document.getElementById("txtPassAnswer");
  var phone=document.getElementById("txtPhone");
  var email=document.getElementById("txtEmail");
  var postcode=document.getElementById("txtPostcode");

  if(user.value=="" || user.value==null )
  {
   alert("用户名不能为空");
   user.focus();
   return false;
  }
   if(password.value=="" || password.value==null )
  {
   alert("密码不能为空");
   password.focus();
   return false;
  }
   if(repassword.value!=password.value )
  {
   alert("两次密码不一致");
   repassword.focus();
   return false;
  }
   if(!isEmail(email.value))
  {
   alert("邮箱格式不正确");
   email.focus();
   return false;
  }
   if(question.value=="" || question.value==null )
  {
   alert("密码提示不能为空");
   question.focus();
   return false;
  }
  
  if(answer.value=="" || answer.value==null )
  {
   alert("密码回答不能为空");
   answer.focus();
   return false;
  }
  
  return true;
}

//用户登录
function CheckLogin()
{
  var username1=document.getElementById("txtUserName1");
  var password1=document.getElementById("txtPassword1");
  if(username1.value=="" || username1.value==null )
  {
   alert("用户名不能为空");
   username1.focus();
   return false;
  }
   if(password1.value=="" || password1.value==null )
  {
   alert("密码不能为空");
   password1.focus();
   return false;
  }
  
  return true;
}

//用户登录2
function CheckLogin2()
{
  var username2=document.getElementById("txtUserName2");
  var password2=document.getElementById("txtPassword2");
  if(username2.value=="" || username2.value==null )
  {
   alert("用户名不能为空");
   username2.focus();
   return false;
  }
   if(password2.value=="" || password2.value==null )
  {
   alert("密码不能为空");
   password2.focus();
   return false;
  }
  
  return true;
}
//修改用户信息
function CheckModInfo()
{
  var $realname=document.getElementById("txtRealName");
  var $question=document.getElementById("txtPassQuestion");
  var $answer=document.getElementById("txtPassAnswer");
  var $phone=document.getElementById("txtPhone");
  var $email=document.getElementById("txtEmail");
  var $postcode=document.getElementById("txtPostcode");
 
   if($question.value=="" || $question.value==null )
  {
   alert("密码提示不能为空");
   $question.focus();
   return false;
  }
  if($answer.value=="" || $answer.value==null )
  {
   alert("密码回答不能为空");
   $answer.focus();
   return false;
  }
 
   if($phone.value=="" || $phone.value==null)
  {
   alert("电话不能为空");
   $phone.focus();
   return false;
  }
   if(!isEmail($email.value))
  {
   alert("邮箱格式不正确");
   $email.focus();
   return false;
  }
  return true;
}

//用户注册
function CheckModPass()
{
  var oldpassword=document.getElementById("txtOldPassword");
  var password=document.getElementById("txtPassword");
  var repassword=document.getElementById("txtRePassword");
  if(oldpassword.value=="" || oldpassword.value==null )
  {
   alert("原始密码不能为空");
   oldpassword.focus();
   return false;
  }
   if(password.value=="" || password.value==null )
  {
   alert("新密码不能为空");
   password.focus();
   return false;
  }
   if(repassword.value!=password.value )
  {
   alert("两次密码不一致");
   repassword.focus();
   return false;
  }
 
  return true;
}

//新闻搜索
function CheckNewsSearch()
{
  var search=document.getElementById("txtSearch");
  if(search.value=="" || search.value==null )
  {
   alert("关键字不能为空");
   search.focus();
   return false;
  } 
  return true;
}

//判断用户名
function CheckFindPwd()
{
  var $username=document.getElementById("txtFindUser");
  var $question=document.getElementById("txtPassQuestion");
  var $answer=document.getElementById("txtPassAnswer");
  if($username.value=="" || $username.value==null )
  {
   alert("用户名不能为空");
   $username.focus();
   return false;
  } 
  if($question.value=="" || $question.value==null )
  {
   alert("密码提示不能为空");
   $question.focus();
   return false;
  } 
  if($answer.value=="" || $answer.value==null )
  {
   alert("密码回答不能为空");
   $answer.focus();
   return false;
  } 
  return true;
}
//找回密码
function CheckChPass()
{
  var password=document.getElementById("txtNewPassword");
  var repassword=document.getElementById("txtReNewPassword");
 
 
   if(password.value=="" || password.value==null )
  {
   alert("密码不能为空");
   password.focus();
   return false;
  }
   if(repassword.value!=password.value )
  {
   alert("两次密码不一致");
   repassword.focus();
   return false;
  }
  return true;
}

//提交订单
function CheckOrderForm(id)
{
  var $name=document.getElementById("txtName");
  var $address=document.getElementById("txtAddress");
  var $phone=document.getElementById("txtPhone");
  var $email=document.getElementById("txtEmail");
  var $zip=document.getElementById("txtCode");

  var cookieString=document.cookie;
  if (cookieString.length<50)
    {
        alert("Your shopping cart is emtpy.");
         return false;
   }

  if($name.value=="" || $name.value==null )
  {
   alert("Please enter Consignee Name");
   $name.focus();
   return false;
  } 
  
  if($address.value=="" || $address.value==null )
  {
   alert("Please enter Consignee Address");
   $address.focus();
   return false;
  } 
  
  if($zip.value=="" || $zip.value==null )
  {
   alert("Plese enter postCode");
   $zip.focus();
   return false;
  }
  
  if($phone.value=="" || $phone.value==null )
  {
   alert("Please enter Consignee phone");
   $phone.focus();
   return false;
  } 
     
  if(!isEmail($email.value))
  {
   alert("Plese enter a valid email");
   $email.focus();
   return false;
  } 
  if(id==1)
	{
	   var code=document.getElementById("code");
	   if(code.value=="" || code.value==null )
	  {
	   alert("Please enter a Code, thanks!");
	   code.focus();
	   return false;
	  }
   }

  return true;
}

//供求信息发布
function CheckPublish()
{
  var $title=document.getElementById("txtTitle");
  if($title.value=="" || $title.value==null )
  {
   alert("标题不能为空");
   $title.focus();
   return false;
  } 
  
  return true;
}

function isTel(str)
{
       var reg=/(^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$)|(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)|(^13\d{5,9}$)|(^153\d{4,8}$)|(^159\d{4,8}$)|(^158\d{4,8}$)|(^0\d{10,11}$)/; 
       return (reg.test(str))
}

function isMobile(strmobile)
{
       var mobile=/(^13\d{5,9}$)|(^153\d{4,8}$)|(^159\d{4,8}$)|(^158\d{4,8}$)|(^0\d{10,11}$)/; 
       return (mobile.test(strmobile))
}
function isPostcode(postcode)
{
   var code=/^[0-9]{6}$/;
   return (code.test(postcode))
}
function isEmail(vEMail)
{
    var regInvalid=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
	var regValid=/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
	return (!regInvalid.test(vEMail)&&regValid.test(vEMail));
    //var res = /^[0-9a-zA-Z_\-\.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+)*$/;
    //var res=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    //return res.test(vEMail);
}

var xmlHttp = null;
function CheckUser()
{
var $user = document.getElementById("txtUser");
if($user.value == "")
{
    document.getElementById("exsits").innerText="请输入用户名!";
    $user.focus();
    return false;
}
else
{
    if(!isName($user.value))
    {
       document.getElementById("exsits").innerText="请输入用户名!";
        $user.focus();
        return false;
    }
}
document.getElementById("exsits").innerHTML="正在检测,请梢候...";
try
{
xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(err1)
{
try
{
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch(err2)
{
xmlHttp = new XMLHttpRequest();
}
}
var txtUser = document.getElementById("txtUser");
var url = "CheckUser.aspx?User=" + txtUser.value;
xmlHttp.open("GET",url,true);
xmlHttp.onreadystatechange = OnHandler;
xmlHttp.send(null);

}
function OnHandler()
{
if(xmlHttp.readyState == 4)
{
var isValid = xmlHttp.responseText;
var exists = document.getElementById("exsits"); 
exists.innerHTML = isValid.substring(0,100);
//document.getElementById("txtUserName").readonly=false;
}
}

function isName(s){
	return /^[\w]{3,16}$/.test(s)
}

function ChkPass()
	    {
	    
	        var oldp = document.getElementById("txtOldPass");
	        var p1 = document.getElementById("txtNewPass1");
	        var p2 = document.getElementById("txtNewPass2");
	        
	         if(oldp.value == "")
	        {
	            alert("原始密码不能为空！");
	            oldp.focus();
	            return false;
	        }
	        
	        if(p1.value == "")
	        {
	            alert("新密码不能为空！");
	            p1.focus();
	            return false;
	        }
	        
	        if(p1.value != p2.value)
	        {
	            alert("两次输入的密码不一致！请重新输入");
	             p2.focus();
	            return false;
	        }
	    }

// 2009-08-26
function CheckProSearch()
{
	var search=document.getElementById("txtSearch");
	if(search.value=="" || search.value==null )
	{
		alert("关键字不能为空");
		search.focus();
		return false;
	} 
	return true;
}
// 2009-08-26
function checkresume()
{
	var txt1  = document.getElementById("txt1");
	var txt9  = document.getElementById("txt9");
	var txt12 = document.getElementById("txt12");
	var txt13 = document.getElementById("txt13");
	var txt15 = document.getElementById("txt15");
	var txt16 = document.getElementById("txt16");
	var txt17 = document.getElementById("txt17");
	var txt22 = document.getElementById("txt22");
	var txt26 = document.getElementById("txt26");
	var txt27 = document.getElementById("txt27");
	if(txt1.value=="" || txt1.value==null )
	{
		alert("姓名不能为空");
		txt1.focus();
		return false;
	} 

	if(txt9.value=="" || txt9.value==null )
	{
		alert("现在从事专业不能为空");
		txt9.focus();
		return false;
	} 
	if(txt12.value=="" || txt12.value==null )
	{
		alert("毕业学校不能为空");
		txt12.focus();
		return false;
	} 
	if(txt13.value=="" || txt13.value==null )
	{
		alert("专业名称不能为空");
		txt13.focus();
		return false;
	} 
	if(txt15.value=="" || txt15.value==null )
	{
		alert("培养方式不能为空");
		txt15.focus();
		return false;
	} 
	if(txt16.value=="" || txt16.value==null )
	{
		alert("第一外语 语种不能为空");
		txt16.focus();
		return false;
	} 
	if(txt17.value=="" || txt17.value==null )
	{
		alert("水平不能为空");
		txt17.focus();
		return false;
	} 
	if(txt22.value=="" || txt22.value==null )
	{
		alert("求职意向不能为空");
		txt22.focus();
		return false;
	} 
	if(txt26.value=="" || txt26.value==null )
	{
		alert("手机不能为空");
		txt26.focus();
		return false;
	} 
	if(!isEmail(txt27.value))
	{
		alert("邮箱格式不正确");
		txt27.focus();
		return false;
	} 
	return true;
}
