<?php
require_once 'inc/Tweetgater/Display.php';
$tweetgater = new Tweetgater_Twitter();
$config = $tweetgater->getConfigFile();

$page = 1;

if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}
?>

<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="ie iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7) ]><html class="ie" lang="en"><![endif]-->
<!--[if !(IEMobile) | !(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<?php virtual('/wdn/templates_3.1/includes/metanfavico.html'); ?>
<!--
    Membership and regular participation in the UNL Web Developer Network
    is required to use the UNL templates. Visit the WDN site at 
    http://wdn.unl.edu/. Click the WDN Registry link to log in and
    register your unl.edu site.
    All UNL template code is the property of the UNL Web Developer Network.
    The code seen in a source code view is not, and may not be used as, a 
    template. You may not use this code, a reverse-engineered version of 
    this code, or its associated visual presentation in whole or in part to
    create a derivative work.
    This message may not be removed from any pages based on the UNL site template.
    
    $Id: php.fixed.dwt.php 1390 2010-11-18 15:24:33Z bbieber2 $
-->
<?php virtual('/wdn/templates_3.1/includes/scriptsandstyles.html'); ?>
<link rel="stylesheet" type="text/css" media="screen" href="sharedcode/twitter.css" />
<script type="text/javascript" src="sharedcode/cssua.min.js"></script>
<script type="text/javascript" src="sharedcode/jquery.jscroll.min.js"></script>

<meta property="og:title" content="UNL | on Twitter" />
<meta property="og:type" content="university" />
<meta property="og:url" content="<?php echo $config->site->url; ?>" />
<meta property="og:image" content="<?php echo $config->site->url; ?>/images/icon.jpg"/>
<meta property="og:site_name" content="University of Nebraska-Lincoln" />
<meta property="fb:admins" content="511000653" />
<meta property="og:description"
          content="With everything going on here at UNL, why not have an
          easier way of knowing what's happening? Here's a collection of
          official UNL Twitter feeds to help keep you in the know." />
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

<!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" media="screen" href="sharedcode/ie8-and-down.css" />
<![endif]-->

<title>UNL | on Twitter</title>

</head>
<body class="fixed">
<p class="skipnav"> <a class="skipnav" href="#maincontent">Skip Navigation</a> </p>
<div id="wdn_wrapper">
    <div id="header"> <a href="http://www.unl.edu/" title="UNL website"><img src="/wdn/templates_3.0/images/logo.png" alt="UNL graphic identifier" id="logo" /></a>
        <h1>University of Nebraska&ndash;Lincoln</h1>
        <?php virtual('/wdn/templates_3.0/includes/wdnTools.html'); ?>
    </div>
    <div id="wdn_navigation_bar">
        <div id="breadcrumbs">
            <!-- WDN: see glossary item 'breadcrumbs' -->

          <ul>
              <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
              <li>on Twitter</li>
          </ul>
</div>
        <div id="wdn_navigation_wrapper">
            <div id="navigation">
<?php include 'sharedcode/navigation.html'; ?>
</div>
        </div>
    </div>
    <div id="wdn_content_wrapper">
        <div id="titlegraphic">
<h1>UNL on Twitter</h1>
</div>
        <div id="pagetitle"> </div>
        <div id="maincontent">
            <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
          <div class="head-band">
                 	
                <!--
                <div class="theTab">
                
                <ul class="socialbuttons">
                    <li class="twitter">
                    <a class="tooltip" href="https://twitter.com/#!/unlnews" title="get more news @UNLNews">Twitter</a>
                    </li>
                    <li class="facebook"><a class="tooltip" href="https://www.facebook.com/unl.edu?sk=wall" title="like UNL on Facebook">Facebook</a></li>
                    <li class="youtube"><a class="tooltip" href="http://www.youtube.com/unl" title="watch our videos on YouTube">YouTube</a></li>
                   </ul>
				</div>
      -->
			     
            <div class="share_bar">
            <p style="float:left;">Share</p>
			<ul class="like_bar">
         	
            <li>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $config->site->url; ?>" data-text="Check out the UNL twitter site!" data-via="UNLFeed">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>

			<li>
            <div class="fb-like" data-href="<?php echo $config->site->url; ?>" data-send="false" data-layout="button_count" data-width="110" data-show-faces="true" data-font="arial"></div></li>
			
            <li>
			<div class="g-plusone" data-size="medium"></div>

    <script type="text/javascript">
      window.___gcfg = {
        lang: 'en-US'
      };

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script></li>
				
            </ul>
            </div>
          
         
  
         </div>
           
          <!-- - - - - - Twitter Content - - - - - - -->
          
          <div class="tweetContainer">
                <div class="tweetBox">
                    <div id="timeline" class="jscroll">
                        <?php echo Tweetgater_Display::timeline($page); ?>
                    </div>
                    <!--
                    <div id="search">
                        <?php // echo Tweetgater_Display::search('#unl', $page); ?>
                    </div> 
                    <div id="accounts">
                        <?php // echo Tweetgater_Display::accounts(); ?>
                    </div>
                    -->             
                </div>
          </div>

        <div class="clear"></div>
            <?php virtual('/wdn/templates_3.1/includes/noscript.html'); ?>
            <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
        </div>
        <footer id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col" id="wdn_footer_feedback">
                <!--#include virtual="/wdn/templates_3.1/includes/feedback.html" -->
            </div>
            <div class="footer_col" id="wdn_footer_related">
                <!-- TemplateBeginEditable name="leftcollinks" -->
                <!--#include virtual="/sharedcode/relatedLinks.html" -->
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_contact">
                <!-- TemplateBeginEditable name="contactinfo" -->
                <!--#include virtual="/sharedcode/footerContactInfo.html" -->
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_share">
                <!--#include virtual="/wdn/templates_3.1/includes/socialmediashare.html" -->
            </div>
            <!-- TemplateBeginEditable name="optionalfooter" -->
            <!-- TemplateEndEditable -->
            <div id="wdn_copyright">
                <div>
                    <!-- TemplateBeginEditable name="footercontent" -->
                    <!--#include virtual="/sharedcode/footer.html" -->
                    <!-- TemplateEndEditable -->
                    <!--#include virtual="/wdn/templates_3.1/includes/wdn.html" -->
                </div>
                <!--#include virtual="/wdn/templates_3.1/includes/logos.html" -->
            </div>
        </footer>
<script type="text/javascript">
WDN.loadJQuery(function() {
  var $ = WDN.jQuery;
  $('.jscroll').jscroll({
      loadingHtml: '<small style="text-align:center;">Loading...</small>',
      padding: 20,
      nextSelector: 'a:last',
      contentSelector: '.tweet, a.moreButton'
  });
});
</script>
</body>
</html>
