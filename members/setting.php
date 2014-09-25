<?php
require "usermgr.php";
$msgInfo="";
$msgSurvey="";
$msgPswd="";
$user = $_REQUEST["user"];
$pswd = $_REQUEST["pswd"];
$auth = authenticate($user, $pswd);
if ($auth==0)
{
	if (strcmp($_POST["type"],"info")==0)
	{
		$phone = join(" ",array($_POST["phone1"],$_POST["phone2"],$_POST["phone3"]));
		writeFileAES("data/$user.dat",array($_POST["email"],$_POST["name"],$_POST["class"],$phone,$_POST["github"]));
		$msgInfo = "信息已更新";
	} else if (strcmp($_POST["type"], "survey")==0)
	{
		writeFileAES("data/info/$user",array($_POST["lang"],$_POST["freetime"],$_POST["major"]));
		$msgSurvey = "信息已更新";
	} else if (strcmp($_POST["type"], "pswd")==0)
	{
		// Force authenticate password
		$hash = readFileAES("data/$user.usr")[0];
		if (strcmp($hash, sha1($_POST["pass0"]))!=0||strlen($_POST["pass0"])==0)
		{
			// Fail Remove Credential
			unlink("data/$user.ip");
			$msgPswd = "原密码输入错误";
		} else
		{
			writeFileAES("data/$user.usr",array(sha1($_POST["pass"])));
			$msgPswd = "密码修改成功";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Settings - AppHub</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
if ($auth!=0)
{
	if ($auth==2)
	{
		echo "<meta http-equiv='refresh' content='0; url=login.php' />";
	} else
	{
		echo "<meta http-equiv='refresh' content='0; url=login.php?error=登录失败' />";
	}
}
?>

<link rel="stylesheet" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" type="text/css" /><link rel='stylesheet' type='text/css' href='http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1409984621' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<style type='text/css'>
.wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline {}
.wsite-headline-paragraph {}
.wsite-button-inner {}
.wsite-not-footer blockquote, #wsite-com-product-tab blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
</style>

<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='jquery.min.js'></script>
<script src='http://cdn2.editmysite.com/js/site/main.js?buildTime=1234'></script>
<script>_W.relinquish && _W.relinquish()</script>
<script type='text/javascript'><!--
var IS_ARCHIVE=1;
(function(jQuery){
function initFlyouts(){initPublishedFlyoutMenus([{"id":"511272788535010122","title":"HOME","url":"index.html","target":""},{"id":"962502244547413226","title":"NEWS","url":"news.html","target":""},{"id":"678304809576138030","title":"ABOUT","url":"about.html","target":""},{"id":"366252425714719181","title":"MEMBERS","url":"http:\/\/nflsapps.sinaapp.com\/members","target":""}],"460520423270140799","<li><a href='#'>{{title}}<\/a><\/li>",'',false)}
if (jQuery) {
if (jQuery.browser.msie && !window.flyoutMenusRefreshable) window.onload = initFlyouts;
else jQuery(initFlyouts);
}else{
if (Prototype.Browser.IE) window.onload = initFlyouts;
else document.observe('dom:loaded', initFlyouts);
}
})(window._W && _W.jQuery)
//-->
</script>
</head>
<body class='no-header-page wsite-background  wsite-theme-light wsite-page-settings'>
<div id="nav-wrap">
        <div class="container">
			<table id="header">
                <tr>
                    <td id="logo"><span class='wsite-logo'><a href='http://nflsapps.sinaapp.com'><span id="wsite-title">AppHub</span></a></span></td>
					<td id="nav"> <ul class='wsite-menu-default'><li id='pg511272788535010122'><a href='http://nflsapps.sinaapp.com/index.html'>HOME</a></li><li id='pg962502244547413226'><a href='http://nflsapps.weebly.com/news.html'>NEWS</a></li><li id='pg678304809576138030'><a href='http://nflsapps.weebly.com/about.html'>ABOUT</a></li><li id='pg366252425714719181'><a href='http://nflsapps.sinaapp.com/members'>MEMBERS</a></li></ul> </td>
					<!--<td class="search">{search}</td>-->
				</tr>
			</table>
        </div><!-- end container -->
    </div><!-- end nav-wrap -->

    <div id="main-wrap">
        <div class="container">
   			<div id='wsite-content' class='wsite-elements wsite-not-footer'>
<div class="paragraph" style="text-align:left;">&#20197;&#19979;&#34920;&#21333;&#20869;&#23481;&#37117;&#23558;&#22312;&#26381;&#21153;&#22120;&#19978;&#21152;&#23494;&#23384;&#20648;</div>

<div>
<form enctype="multipart/form-data" action="setting.php" method="POST" id="form-137798819441697310">
	<input type = "hidden" value = "info" name = "type" />
	<?php
		echo "<input type = 'hidden' name = 'user' value = '".$_REQUEST['user']."' />";
	?>
<div id="137798819441697310-form-parent" class="wsite-form-container" style="margin-top:10px;">
  <ul class="formlist" id="137798819441697310-form-list">
    <h2 class="wsite-content-title" style="text-align:left;">&#22522;&#26412;&#20449;&#24687;</h2>
    <span><?php echo $msgInfo;?></span>
<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-718848168275807008">Email <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-718848168275807008" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="email"  <?php if ($auth==0){echo "value='".getInfo($user, 0)."'";}?>/>
				</div>
				<div id="instructions-718848168275807008" class="wsite-form-instructions" style="display:none;">请确保填写常用Email以及时接受更新。更改Email时请务必更新此表格信息</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-576997760107097890">姓名 <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-576997760107097890" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="name" <?php if ($auth==0){echo "value='".getInfo($user, 1)."'";}?>/>
				</div>
				<div id="instructions-576997760107097890" class="wsite-form-instructions" style="display:none;">请填写您的真实姓名</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-124505976530596248">班级 <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-124505976530596248" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="class"  <?php if ($auth==0){echo "value='".getInfo($user, 2)."'";}?>/>
				</div>
				<div id="instructions-124505976530596248" class="wsite-form-instructions" style="display:none;">请填写您所在的班级。格式可辨认即可。请在更改班级时（升级、中考、分班等）及时修改此项信息</div>
			</div></div>

<div><div class="wsite-form-field wsite-phone-field" style="margin:5px 0px 0px 0px;">
				<label class="wsite-form-label" for="input-508629540961495196">手机 <span class="form-required">*</span></label>
				<div style="clear:both;"></div>
				<div class="wsite-form-input-container wsite-form-left wsite-form-input-phone-first" style = "width:27%">
					<input id="input-508629540961495196" class="wsite-form-input wsite-input" type="text" maxlength="3" name="phone1" style = "width:27%" onKeyUp="if(this.value.length==3){document.getElementById('input-508629540961495196-1').focus()}"  <?php if ($auth==0){echo "value='".substr(getInfo($user, 3), 0,3)."'";}?>/>
				</div>
				<div class="wsite-form-phone-separator">-</div>
				<div class="wsite-form-input-container wsite-form-left wsite-form-input-phone-second" style = "width:31%">
					<input id="input-508629540961495196-1" class="wsite-form-input" type="text" maxlength="4" name="phone2"  onKeyUp="if(this.value.length==4){document.getElementById('input-508629540961495196-2').focus()}" <?php if ($auth==0){echo "value='".substr(getInfo($user, 3), 4,4)."'";}?>/>
				</div>
				<div class="wsite-form-phone-separator">-</div>
				<div class="wsite-form-input-container wsite-form-right wsite-form-input-phone-third" style="margin-bottom:5px; float:left; width:31%">
					<input id="input-508629540961495196-2" class="wsite-form-input" type="text" maxlength="4" name="phone3" <?php if ($auth==0){echo "value='".substr(getInfo($user, 3), 9,4)."'";}?>/>
				</div>
				<div id="instructions-508629540961495196" class="wsite-form-instructions" style="display:none;">请填写您的手机号码以便紧急情况更新</div>
			</div>
			<div style="clear:both;"></div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-644881780199927622">GitHub ID <span class="form-not-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-644881780199927622" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="github"  <?php if ($auth==0){echo "value='".getInfo($user, 4)."'";}?>/>
				</div>
				<div id="instructions-644881780199927622" class="wsite-form-instructions" style="display:none;">重要！请填写您的GitHub用户名（github.com/xxx的xxx即为用户名），以便我们可以将您加入到我们的团队</div>
			</div></div>
  </ul>
</div>
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="137798819441697310" />
  <input type='submit' style='position:absolute;top:0;left:-9999px;width:1px;height:1px' /><a class='wsite-button' onclick="document.getElementById('form-137798819441697310').submit()"><span class='wsite-button-inner'>更新</span></a>
</div>
</form>


</div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div>
<form enctype="multipart/form-data" action="setting.php" method="POST" id="form-660867307694755233">
	<input type = "hidden" value = "survey" name = "type" />
	<?php
		echo "<input type = 'hidden' name = 'user' value = '".$_REQUEST['user']."' />";
	?>
<div id="660867307694755233-form-parent" class="wsite-form-container" style="margin-top:10px;">
  <ul class="formlist" id="660867307694755233-form-list">
    <h2 class="wsite-content-title" style="text-align:left;">&#29992;&#25143;&#35843;&#26597;</h2>
    <span><?php echo $msgSurvey;?></span>
<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-125266283942757342">使用的语言 <span class="form-not-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-125266283942757342" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="lang" <?php if ($auth==0){echo "value='".getResponse($user, 0)."'";}?>/>
				</div>
				<div id="instructions-125266283942757342" class="wsite-form-instructions" style="display:none;">使用程序设计语言，如C,Java,HTML等。请全部列举</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-954225844685700081">个人简介 <span class="form-not-required">*</span></label>
				<div class="wsite-form-input-container">
					<textarea id="input-954225844685700081" class="wsite-form-input wsite-input wsite-input-width-370px" name="major" style="height: 200px">
					<?php if ($auth==0){echo getResponse($user, 2);}?>
					</textarea>
				</div>
				<div id="instructions-954225844685700081" class="wsite-form-instructions" style="display:none;">请说明你关于程序设计（或其他与计算机科学有关方面）的基本信息。包括目前编写的区域（如Windows,命令行,HTML5,iOS等）、感兴趣的内容。请解释或举例</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-946457260170963094">空闲时间 <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-946457260170963094" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="freetime" <?php if ($auth==0){echo "value='".getResponse($user, 1)."'";}?>/>
				</div>
				<div id="instructions-946457260170963094" class="wsite-form-instructions" style="display:none;">请填写你每月可以花在参与社团工程的时间（主要是在家，编写代码或者其他）。(小时)</div>
			</div></div>
  </ul>
</div>
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="660867307694755233" />
  <input type='submit' style='position:absolute;top:0;left:-9999px;width:1px;height:1px' /><a class='wsite-button' onclick="document.getElementById('form-660867307694755233').submit()"><span class='wsite-button-inner'>提交</span></a>
</div>
</form>


</div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div>
<form enctype="multipart/form-data" action="setting.php" method="POST" id="form-516147550545720671">
	<input type = "hidden" value = "pswd" name = "type" />
	<?php
		echo "<input type = 'hidden' name = 'user' value = '".$_REQUEST['user']."' />";
	?>
<div id="516147550545720671-form-parent" class="wsite-form-container" style="margin-top:10px;">
  <ul class="formlist" id="516147550545720671-form-list">
    <h2 class="wsite-content-title" style="text-align:left;">&#26356;&#25913;&#23494;&#30721;</h2>
    <span><?php echo $msgPswd;?></span>
<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-277262934360931532">原密码 <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-277262934360931532" class="wsite-form-input wsite-input wsite-input-width-370px" type="password" name="pass0" />
				</div>
				<div id="instructions-277262934360931532" class="wsite-form-instructions" style="display:none;"></div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-203184222923105009">新密码 <span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-203184222923105009" class="wsite-form-input wsite-input wsite-input-width-370px" type="password" name="pass" />
				</div>
				<div id="instructions-203184222923105009" class="wsite-form-instructions" style="display:none;"></div>
			</div></div>
  </ul>
</div>
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="516147550545720671" />
  <input type='submit' style='position:absolute;top:0;left:-9999px;width:1px;height:1px' /><a class='wsite-button' onclick="document.getElementById('form-516147550545720671').submit()"><span class='wsite-button-inner'>确认</span></a>
</div>
</form>


</div></div>

        </div><!-- end container -->
    </div><!-- end main-wrap -->

    <div id="footer-wrap">
    </div><!-- end footer-wrap -->
<script type="text/javascript" src="files/theme/custom.js"></script>

</body>
</html>