<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("meta.php"); ?>
</head>

<body>
    <div id="body">
        <div id="universal">
           <div id="header">
           		<div class="wrapper">
                    <div class="logo">
                        <a href="index.php">&nbsp;</a>
                    </div>
                    <div id="navigation">
                        <div id="nav">
                            <ul class="sf-js-enabled" id="main-menu">
                              <li class="featuresNav"><a href="index.php?page=features">Features</a></li>
                              <li class="pricingNav"><a href="index.php?page=pricing">Pricing</a></li>
                              <li class="contactNav"><a href="index.php?page=contact">Contact</a></li>
                              <li class="UserLogin"><a href="#">User Login</a></li>
                            </ul>  
                        </div>
                    </div>
                </div><!-- end .wrapper -->
            </div><!-- end #header -->
			<?php 
            if($_GET['page']=='about'){
                include("about.php");
            }else if($_GET['page']=='features'){ 
                include("features.php");
            }else if($_GET['page']=='pricing'){ 
                include("pricing.php");
            }else if($_GET['page']=='contact'){ 
                include("contact.php");
            }else if($_GET['page']==''){ 
                include("home.php");
            }else{ 
                include("home.php");
            }?>
           <div id="footer">
           		<div id="footer-top">
                    <div class="wrapper">
                        <div class="section">
                            <div class="col3">
                                <div class="boxFooter">
                                    <div class="entry-box">
                                        <h3 class="the-title">Platform Updates</h3>
                                        <img src="content/updates.png" />
                                        <h6>3 New Forums added to our list</h6>
                                        <p>Check out the latest data source and reports updates on
Sonar. <br />Follow us on twitter at <a href="https://twitter.com/sonarplatform" style="color:#fff;" target="_blank">@sonarplatform</a> </p>
                                    </div><!-- end .entry-box -->
                                </div><!-- end .boxFooter -->
                            </div><!-- end .col3 -->
                            <div class="col3">
                                <div class="boxFooter">
                                    <div class="entry-box">
                                        <h3 class="the-title">From the Blog</h3>
                                        <p>Sonar will be publishing interesting topics on local
topics on the Sonar Blog. Check back to see what's 
happening in the near future!</p>
                                        <a href="http://www.blog.sonarplatform.com/" target="_blank"><img src="images/arrow_more.png" /></a>
                                    </div><!-- end .entry-box -->
                                </div><!-- end .boxFooter -->
                            </div><!-- end .col3 -->
                            <div class="col3">
                                <div class="boxBlack">
                                    <div class="entry-box">
                                        <h3 class="the-title">Get It While it's Hot!</h3>
                                        <img src="content/shakehand.png" />
                                        <p>Sonar is offering attractive partnership and reseller programs in October through the end of the year. Become a Sonar reseller now.</p>
                                        <a href="index.php?menu=contact" class="btn btn_white">Tell Me More</a>
                                    </div><!-- end .entry-box -->
                                </div><!-- end .boxFooter -->
                            </div><!-- end .col3 -->
                        </div><!-- end .section -->
                    </div><!-- end .wrapper -->
                </div><!-- end #footer-top -->
                <div id="footer-bottom">
                    <div class="wrapper">
                    	<h3>&copy; 2013 SONAR<br />All rights reserved.</h3>
                    </div><!-- end .wrapper -->
                </div><!-- end #footer-bottom -->
            </div><!-- end #footer -->
        </div><!-- end #universal -->
    </div><!-- end #body -->
</body>
</html>