<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- InstanceBegin template="/Templates/php.fixed.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
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
<link rel="stylesheet" type="text/css" media="screen" href="/wdn/templates_3.0/css/all.css" />
<link rel="stylesheet" type="text/css" media="print" href="/wdn/templates_3.0/css/print.css" />
<script type="text/javascript" src="/wdn/templates_3.0/scripts/all.js"></script>
<?php virtual('/wdn/templates_3.0/includes/browserspecifics.html'); ?>
<?php virtual('/wdn/templates_3.0/includes/metanfavico.html'); ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>UNL | on Twitter</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php 
require_once 'inc/Tweetgater/Display.php';
?>
<link rel="stylesheet" type="text/css" media="screen" href="sharedcode/twitter.css" />

<!-- InstanceEndEditable -->
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
            <!-- InstanceBeginEditable name="breadcrumbs" -->
            
            <ul style="visibility:hidden;">
                <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                <li>on Twitter</li>
            </ul>
            
            <!-- InstanceEndEditable --></div>
        <div id="wdn_navigation_wrapper">
            <div id="navigation"><!-- InstanceBeginEditable name="navlinks" -->
                <?php include 'sharedcode/navigation.html'; ?>
                <!-- InstanceEndEditable --></div>
        </div>
    </div>
    <div id="wdn_content_wrapper">
        <div id="titlegraphic"><!-- InstanceBeginEditable name="titlegraphic" -->
            <h1>UNL on Twitter</h1>
            
            <!-- InstanceEndEditable --></div>
        <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --> <!-- InstanceEndEditable --></div>
        <div id="maincontent">
            <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
            <!-- InstanceBeginEditable name="maincontentarea" -->
           
			<div class="boxheader">
            <div class="logo_bg">
            <a class="twitter_logo" href="http://www.twitter.com/">Twitter logo</a></div>
            
            	<div class="blurb">
            	<h3>Stay Connected on</h3>
                <p>With everything going on here at UNL, why not have an easier way of knowing what's happening? Here's a collection of official UNL Twitter feeds to help keep you in the know.</p>
                </div>
	
           </div>
           
           <div class="right">
           
           		<?php include 'right.html'; ?>
                           
           </div>
           
           <!-- Tab Content -->
           
         <div class="tweetBox">
         <h4 class="top_link"><a href="index.php">&rarr; <span>UNL twitter page</span></a></h4>
         
           <?php echo Tweetgater_Display::accounts(); ?>
         </div>
           

             

           
            <!-- InstanceEndEditable -->
            <div class="clear"></div>
            <?php virtual('/wdn/templates_3.0/includes/noscript.html'); ?>
            <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
        </div>
        <div id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col">
                <?php virtual('/wdn/templates_3.0/includes/feedback.html'); ?>
            </div>
            <div class="footer_col"><!-- InstanceBeginEditable name="leftcollinks" -->
                <?php include 'sharedcode/relatedLinks.html'; ?>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col"><!-- InstanceBeginEditable name="contactinfo" -->
                <?php include 'sharedcode/footerContactInfo.html'; ?>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col">
                <?php virtual('/wdn/templates_3.0/includes/socialmediashare.html'); ?>
            </div>
            <!-- InstanceBeginEditable name="optionalfooter" --> <!-- InstanceEndEditable -->
            <div id="wdn_copyright"><!-- InstanceBeginEditable name="footercontent" -->
                <?php include 'sharedcode/footer.html'; ?>
                <!-- InstanceEndEditable -->
                <?php virtual('/wdn/templates_3.0/includes/wdn.html'); ?>
                | <a href="http://validator.unl.edu/check/referer">W3C</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS</a> <a href="http://www.unl.edu/" title="UNL Home" id="wdn_unl_wordmark"><img src="/wdn/templates_3.0/css/footer/images/wordmark.png" alt="UNL's wordmark" /></a> </div>
        </div>
    </div>
    <div id="wdn_wrapper_footer"> </div>
</div>
</body>
<!-- InstanceEnd --></html>
