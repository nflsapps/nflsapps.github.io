<!DOCTYPE html>
<html>
<head>
<title>Registration - AppHub</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
<link rel="stylesheet" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" type="text/css" /><link rel='stylesheet' type='text/css' href='http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1409830271' title='wsite-theme-css' />
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
function initFlyouts(){initPublishedFlyoutMenus([{"id":"511272788535010122","title":"HOME","url":"index.html","target":""},{"id":"962502244547413226","title":"NEWS","url":"news.html","target":""},{"id":"678304809576138030","title":"ABOUT","url":"about.html","target":""},{"id":"366252425714719181","title":"MEMBERS","url":"http:\/\/nflsapps.sinaapp.com\/members","target":""}],"602830997599496254","<li><a href='#'>{{title}}<\/a><\/li>",'',false)}
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

<script type="text/javascript">
 function isEmail(str){
       var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
       return reg.test(str);
   }
 function isASCII(str){
       var reg = /^\w+$/;
       return reg.test(str);
   }
function checkform()
{
	var user = document.getElementById("input-987285366437144541").value;
	var chk = document.getElementById("input-448513704310205580").value;
	var pswd = document.getElementById("input-732699086639518252").value;
	var email = document.getElementById("input-328503538531380918").value;
	var valid = true;
	if (!isEmail(email))
	{
		document.getElementById("instructions-328503538531380918").innerHTML="请填写正确的Email地址!";
		document.getElementById("instructions-328503538531380918").style.display = "block";
		valid = false;
	}
	if (chk.length==0)
	{
		document.getElementById("instructions-448513704310205580").innerHTML="请填写验证问题!";
		document.getElementById("instructions-448513704310205580").style.display = "block";
		valid = false;
	}
	if (pswd.length==0||(!isASCII(pswd)))
	{
		document.getElementById("instructions-732699086639518252").innerHTML="密码仅包含字母数字下划线！";
		document.getElementById("instructions-732699086639518252").style.display = "block";
		valid = false;
	}
	if (user.length==0||(!isASCII(user)))
	{
		document.getElementById("instructions-987285366437144541").innerHTML="用户名仅包含字母数字下划线！";
		document.getElementById("instructions-987285366437144541").style.display = "block";
		valid = false;
	}
	if (valid)
	{
		document.getElementById('form').submit();
	}

}
</script>
</head>
<body class='landing-page wsite-background  wsite-theme-light wsite-page-registration'>
<div id="nav-wrap">
        <div class="container">
			<table id="header">
                <tr>
                    <td id="logo"><span class='wsite-logo'><a href=''><span id="wsite-title">AppHub</span></a></span></td>
					
					<!--<td class="search">{search}</td>-->
				</tr>
			</table>
        </div><!-- end container -->
    </div><!-- end nav-wrap -->

    <div id="banner-wrap">
        <div class="container">
            <div id="banner">
                
                <div id="bannerright">
                	<h2><span class='wsite-text wsite-headline'>注册</span></h2>
                	<p><span class='wsite-text wsite-headline-paragraph'>加入AppHub，同时加入南外轻应用社</span></p>
                	<!--div class='button-wrap'>{action:button global="false"}</div-->
                </div><!-- end banner-right -->
                
                <div style="clear:both;"></div>
            </div><!-- end banner -->
        </div><!-- end container -->
    </div><!-- end banner-wrap -->

    <div id="main-wrap">
        <div class="container">
			<!--<div id="bannerleft">
				<div class="wsite-header"></div>
            </div> --><!-- end banner-left -->
   			<div id='wsite-content' class='wsite-elements wsite-not-footer'>
<h2 class="wsite-content-title" style="text-align:left;">&#27426;&#36814;&#65281;&#35831;&#22635;&#20889;&#20197;&#19979;&#20449;&#24687;&#21019;&#24314;&#36134;&#25143;</h2>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div>
<form enctype="multipart/form-data" action="userreg.php" method="POST" id="form">
<div id="663604857110052414-form-parent" class="wsite-form-container" style="margin-top:10px;">
  <ul class="formlist" id="663604857110052414-form-list">
    

<div class="paragraph" style="text-align:left;">请在下方输入问题答案或您在学校获得的注册代码，以确认你是南外人<br />
	<strong>请问南外一共有几个语种（包含英语，不包含中文、设计语言等非口语、语言学课程语言等）（纯数字）</strong></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-448513704310205580">确认信息<span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-448513704310205580" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="validinfo" />
				</div>
				<div id="instructions-448513704310205580" class="wsite-form-instructions" style="display:none;"></div>
			</div></div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-987285366437144541">用户名<span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-987285366437144541" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="username" />
				</div>
				<div id="instructions-987285366437144541" class="wsite-form-instructions" style="display:block;">
					<?php
						if (strcmp($_GET["error"],"dupname")==0)
						{
							echo "用户名已存在";
						}
						else
						{
							echo "5位及以上英文或数字，作为你的ID，设置后无法修改";
						}
					?>
				</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-732699086639518252">密码<span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-732699086639518252" class="wsite-form-input wsite-input wsite-input-width-370px" type="password" name="password" />
				</div>
				<div id="instructions-732699086639518252" class="wsite-form-instructions" style="display:none;">安全性自行保证，请牢记</div>
			</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				<label class="wsite-form-label" for="input-328503538531380918">Email<span class="form-required">*</span></label>
				<div class="wsite-form-input-container">
					<input id="input-328503538531380918" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="email" />
				</div>
				<div id="instructions-328503538531380918" class="wsite-form-instructions" style="display:none;">请务必填写你真正每天去查收的邮箱。这时我们通讯的主要方式。</div>
			</div></div>
  </ul>
</div>
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="663604857110052414" />
  <input type='submit' style='position:absolute;top:0;left:-9999px;width:1px;height:1px' /><a class='wsite-button' onclick="checkform()"><span class='wsite-button-inner'>完成</span></a>
</div>
</form>


</div>

<div class="paragraph" style="text-align:left;">&#25105;&#20204;&#20805;&#20998;&#20449;&#20219;&#24744;&#65306;&#35831;&#19981;&#35201;&#27880;&#20876;&#23567;&#21495;&#25110;&#22635;&#20889;&#38169;&#35823;&#20449;&#24687;&#65292;&#35831;&#19981;&#35201;&#22788;&#20110;&#21508;&#31181;&#30446;&#30340;&#22635;&#20889;&#20182;&#20154;&#20449;&#24687;&#12290;<br />&#25105;&#20204;&#20445;&#25252;&#24744;&#30340;&#38544;&#31169;&#65306;&#24744;&#30340;&#25152;&#26377;&#20449;&#24687;&#37117;&#23558;&#21152;&#23494;&#21518;&#23384;&#20648;&#22312;&#26381;&#21153;&#22120;&#19978;&#65292;&#25105;&#20204;&#32477;&#19981;&#20250;&#65288;&#20063;&#19981;&#20250;&#38656;&#35201;&#65289;&#23558;&#24744;&#30340;&#20449;&#24687;&#27844;&#38706;&#32473;&#20219;&#20309;&#31532;&#19977;&#26041;&#12290;<br /></div></div>

        </div><!-- end container -->
    </div><!-- end main-wrap -->

    <div id="footer-wrap">
        <div class="container">
       		Create a <a target="_top" href="http://www.weebly.com/">free web site</a> with <a target="_top" href="http://www.weebly.com/" title="free web site">Weebly</a>
        </div><!-- end container -->
    </div><!-- end footer-wrap -->
<script type="text/javascript" src="files/theme/custom.js"></script>

</body>
</html>