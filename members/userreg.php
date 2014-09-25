<!DOCTYPE html>
<html>
<head>
<title>AppHub - AppHub</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
<?php
require "usermgr.php";

if (userExist($_POST["username"]))
{
	echo "<meta http-equiv='refresh' content='0; url=reg.php?error=dupname' />";
}
?>
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
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script src='http://cdn2.editmysite.com/js/site/main.js?buildTime=1234'></script>
<script>_W.relinquish && _W.relinquish()</script>
<script type='text/javascript'><!--
var IS_ARCHIVE=1;
(function(jQuery){
function initFlyouts(){initPublishedFlyoutMenus([{"id":"511272788535010122","title":"HOME","url":"index.html","target":""},{"id":"962502244547413226","title":"NEWS","url":"news.html","target":""},{"id":"678304809576138030","title":"ABOUT","url":"about.html","target":""},{"id":"366252425714719181","title":"MEMBERS","url":"http:\/\/nflsapps.sinaapp.com\/members","target":""}],"511272788535010122","<li><a href='#'>{{title}}<\/a><\/li>",'active',false)}
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
<body class='landing-page wsite-background  wsite-theme-light wsite-page-index'>
<div id="nav-wrap">
        <div class="container">
			<table id="header">
                <tr>
                    <td id="logo"><span class='wsite-logo'><a href='http://nflsapps.sinaapp.com'><span id="wsite-title">AppHub</span></a></span></td>
					<!--<td class="search">{search}</td>-->
				</tr>
			</table>
        </div><!-- end container -->
    </div><!-- end nav-wrap -->

    <div id="banner-wrap">
        <div class="container">
            <div id="banner">
                
                <div id="bannerright">
                	<h2><span class='wsite-text wsite-headline'>APPHUB注册</span></h2>
                	<p><span class='wsite-text wsite-headline-paragraph' >完成注册</span></p>
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
			<p>
				<?php
				if (!userExist($_POST["username"]))
				{

					$user = $_POST["username"];
					$pswd = $_POST["password"];
					$email = $_POST["email"];
					$validinfo = $_POST["validinfo"];
					if (strlen($user)<5||strlen($pswd)==0||strlen($email)<=5)
					{
						echo "<h2>错误：您填写的信息不完整！</h2>";
					} else
					if (strcmp($validinfo,"4")==0||strcmp($validinfo, "52nfls")==0)
					{
						// Valid
						if (createUser($user, $pswd, $email)==0)
						{
							echo "<h2>恭喜，您的注册已被记录，我们将很快为你激活，请注意查收邮件~！</h2>";
						}
						else
						{
							echo "<h2>非常抱歉，服务器内部文件系统发生错误</h2>";
						}
					}else
					{
						echo "<h2>验证失败</h2>";
					}
				}
				?>
			</p>
				<a class="wsite-button wsite-button-large wsite-button-normal" href="http://nflsapps.sinaapp.com" >
				<span class="wsite-button-inner">返回首页</span>
				</a>
			</div>

        </div><!-- end container -->
    </div><!-- end main-wrap -->

    <div id="footer-wrap">
    </div><!-- end footer-wrap -->
<script type="text/javascript" src="files/theme/custom.js"></script>

</body>
</html>