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
                              <li class="featuresNav"><a href="features.php">Features</a></li>
                              <li class="pricingNav"><a href="pricing.php">Pricing</a></li>
                              <li class="blogNav"><a href="http://blog.sonarplatform.com/">Blog</a></li>
                              <li class="contactNav"><a href="contact.php">Contact</a></li>
                              <li class="UserLogin"><a href="#">User Login</a></li>
                            </ul>  
                        </div>
                    </div>
                </div><!-- end .wrapper -->
            </div><!-- end #header -->
            
            <div id="container" class="contactPage">
               <div id="content">
                    <div id="bannerwrapper">
                        <div id="pagebanner" class="wrapper">
                            <img src="content/banner-contact.jpg" />
                        </div><!-- end #pagebanner -->
                    </div><!-- end #bannerwrapper -->
                    <div id="theContent" class="wrapper">
                        <div class="section">
                            <div class="titleBox">
                                <h3>Contact</h3>
                            </div><!-- end .titleBox -->
                            <div class="entry">
                                <h4 class="quote">Full featured trials and "early adopter" offers and discounts will be available to selected customers within the upcoming months. Kindly fill our your contact information below and we will get back to you within 24 hours.</h4>
                                
                            </div>
                            <div id="formContact">
								<?php include("sendmail.php"); ?>
								<?php if(isset($hasError)) { //If errors are found ?>
                                    <p class="failmail">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                                <?php } ?>
                                <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                                    <div class="successmail">
                                        <p><strong>Email Successfully Sent!</strong></p>
                                        <p>Thank you for using our contact form! Your email was successfully sent and we 'll be in touch with you soon.</p>
                                    </div>
                                <?php } ?>
                                <form <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?> style="display:none;" <?php } ?> method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact" class="contact-form form">
                                    <div class="row">
                                        <label>Your Name</label>
                                        <input type="text"  name="name" id="name" class="required"/>
                                    </div>
                                    <div class="row">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" class="required email" />
                                    </div>
                                    <div class="row">
                                        <label>Company/Organization </label>
                                        <input type="text" name="company" id="company" class="required company" />
                                    </div>
                                    <div class="row">
                                        <label>Contact Number </label>
                                        <input type="text" name="phone" id="phone" class="number required" />
                                    </div>
                                    <div class="row">
                                        <label>Notes or Requests </label>
                                        <textarea name="message" id="message" class="required"></textarea>
                                    </div>
                                    <div class="row">
                                        <label>&nbsp; </label>
                                        <input type="submit" value="Send" class="btn" name="submit" />
                                    </div>
                                </form>
                            </div><!-- #formContact -->
                        </div><!-- end .section -->
                    </div><!-- end #theContent -->
               </div><!-- end #content -->
            </div><!-- end #container -->
			<?php   include("footer.php");  ?>
        </div><!-- end #universal -->
    </div><!-- end #body -->
</body>
</html>