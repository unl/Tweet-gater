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
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
<body class="@@(_document['class'])@@" data-version="$HTML_VERSION$">
    <nav class="skipnav">
        <a class="skipnav" href="#maincontent">Skip Navigation</a>
    </nav>
    <div id="wdn_wrapper">
        <header id="header" role="banner">
            <a id="logo" href="http://www.unl.edu/" title="UNL website">UNL</a>
            <span id="wdn_institution_title">University of Nebraska&ndash;Lincoln</span>
            <span id="wdn_site_title"><!-- TemplateBeginEditable name="titlegraphic" -->UNL on Twitter<!-- TemplateEndEditable --></span>
            <?php virtual('/wdn/templates_3.1/includes/idm.html'); ?>
            <?php virtual('/wdn/templates_3.1/includes/wdnTools.html'); ?>
        </header>
        <div id="wdn_navigation_bar">
            <nav id="breadcrumbs">
                <!-- WDN: see glossary item 'breadcrumbs' -->
                <h3 class="wdn_list_descriptor hidden">Breadcrumbs</h3>
                <!-- TemplateBeginEditable name="breadcrumbs" -->
                <ul>
                    <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                    <li class="selected"><a href="#" title="Site Title">Go Big Red</a></li>
                    <li>UNL on Twitter</li>
                </ul>
                <!-- TemplateEndEditable -->
            </nav>
            <div id="wdn_navigation_wrapper">
                <nav id="navigation" role="navigation">
                    <h3 class="wdn_list_descriptor hidden">Navigation</h3>
                    <!-- TemplateBeginEditable name="navlinks" -->
                    <?php virtual('/sharedcode/navigation.html'); ?>
                    <!-- TemplateEndEditable -->
                </nav>
            </div>
        </div>
        <div id="wdn_content_wrapper">
            <div id="pagetitle">
                <!-- TemplateBeginEditable name="pagetitle" -->
                <!-- <h1>UNL on Twitter</h1> -->
                <!-- TemplateEndEditable -->
            </div>
            <div id="maincontent" role="main">
                <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
                <!-- TemplateBeginEditable name="maincontentarea" -->
                
                <div class="head-band">
                  <h2>Welcome.</h2>
                </div>
                <div class="intro-band">
                  <h2>Discover Twitter.<br>Redesigned for UNL.</h2>
                  <ul class="share">
                    <li><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgobigred.unl.edu%2Ftwitter&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=segoe+ui&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></li>
                    <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://gobigred.unl.edu/twitter" data-via="UNLFeed">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                    <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="medium"></g:plusone></li>
                  </ul>
                </div>
                  
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
           
          
         
  
         
           
          <!-- - - - - - Twitter Content - - - - - - -->
          
          <div class="twitter-band">
              <div id="timeline" class="jscroll">
                  <?php echo Tweetgater_Display::timeline($page); ?>
              </div>         
          </div>

                <!-- TemplateEndEditable -->
                <div class="clear"></div>
                <?php virtual('/wdn/templates_3.1/includes/noscript.html'); ?>
                <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
            </div>
        </div>
        <footer id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col" id="wdn_footer_feedback">
                <?php virtual('/wdn/templates_3.1/includes/feedback.html'); ?>
            </div>
            <div class="footer_col" id="wdn_footer_related">
                <!-- TemplateBeginEditable name="leftcollinks" -->
                <?php virtual('/sharedcode/relatedLinks.html'); ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_contact">
                <!-- TemplateBeginEditable name="contactinfo" -->
                <?php virtual('/sharedcode/footerContactInfo.html'); ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_share">
                <?php virtual('/wdn/templates_3.1/includes/socialmediashare.html'); ?>
            </div>
            <!-- TemplateBeginEditable name="optionalfooter" -->
            <!-- TemplateEndEditable -->
            <div id="wdn_copyright">
                <div>
                    <!-- TemplateBeginEditable name="footercontent" -->
                    <?php virtual('/sharedcode/footer.html'); ?>
                    <!-- TemplateEndEditable -->
                    <?php virtual('/wdn/templates_3.1/includes/wdn.html'); ?>
                </div>
                <?php virtual('/wdn/templates_3.1/includes/logos.html'); ?>
            </div>
        </footer>
    </div>
    <!--
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
  -->
</body>
</html>
