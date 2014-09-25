<!DOCTYPE html>
<html>
<head>
<title>AppHub - AppHub</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
<?php
require "usermgr.php";

$user = $_REQUEST["user"];
$pswd = $_REQUEST["pswd"];
$auth = authenticate($user, $pswd);
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
                	<h2><span class='wsite-text wsite-headline'>AppHub</span></h2>
                	<p><span class='wsite-text wsite-headline-paragraph' >Welcome back, <?php echo $user;?>!</span></p>
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
<h2 class="wsite-content-title" style="text-align:center;">设置</h2>

<div class="paragraph" style="text-align:center;">请点击下面的按钮修改个人资料。我们需要您完整的资料，以供社团登记、工程设计等。您也可以通过下面的链接修改密码</div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div style="text-align:center;"><div style="height: 10px; overflow: hidden;"></div>
<a class="wsite-button wsite-button-large wsite-button-normal" <?php echo "href='setting.php?user=$user'" ?>>
<span class="wsite-button-inner">Settings</span>
</a>
<div style="height: 10px; overflow: hidden;"></div></div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

			</div>

        </div><!-- end container -->
    </div><!-- end main-wrap -->

    <div id="footer-wrap">
    </div><!-- end footer-wrap -->
<script type="text/javascript" src="files/theme/custom.js"></script>

</body>
</html>