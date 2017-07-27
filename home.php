<div id="container" class="homePage">
   <div id="content">
   		<div id="theContent" class="wrapper">
        	<div class="section">
                <ul class="columns-content page-content clearfix">
                    <li class="col-sidebar">
                    	<div class="width-1000">
							<?php include("widget/gallerylist.php"); ?>
                        </div>
                        <div class="width-1000">
                            <?php include("widget/calendar-select.php"); ?>
                        </div><!-- END .widget -->
                    </li><!-- END .col-sidebar -->
                    <li class="col-main">
						<?php include("widget/user-info.php"); ?>
                        <div class="the-contents clearfix">
							<?php include("widget/slider.php"); ?>
                            <div class="width-700">
                                <?php include("widget/gallerylist.php"); ?>
                            </div>
                            <div class="width-700">
								<?php include("widget/calendar-select.php"); ?>
                            </div><!-- END .widget -->
                            <div id="eventContainer">
                            	<div class="eventRow">
                                	<a href="#" class="thumbEvent">
          							  <img src="content/event/1.jpg" alt="" />
                                    </a>
                                    <div class="eventEntry">
                                        <div class="boxTitle">
                                            <h3><a href="#">BLOWFISH</a></h3>
                                        </div><!-- END .boxTitle -->
                                        <p class="date">OCT. 19. 2013</p>
                                        <p class="venue">Jl. Jend Gatot Subroto<br />
                                            Kuningan - Jakarta</p>
                                    </div><!-- end .eventEntry -->
                                </div><!-- end .eventRow -->
                            	<div class="eventRow">
                                	<a href="#" class="thumbEvent">
          							  <img src="content/event/2.jpg" alt="" />
                                    </a>
                                    <div class="eventEntry">
                                        <div class="boxTitle">
                                            <h3><a href="#">DRAGONFLY</a></h3>
                                        </div><!-- END .boxTitle -->
                                        <p class="date">OCT. 19. 2013</p>
                                        <p class="venue">Jl. Jend Gatot Subroto<br />
                                            Kuningan - Jakarta</p>
                                    </div><!-- end .eventEntry -->
                                </div><!-- end .eventRow -->
                            </div><!-- end #eventContainer -->
                        </div><!-- END .the-content -->
                    </li><!-- END .col-main -->
                </ul>
            </div><!-- end .section -->
        </div><!-- end #theContent -->
   </div><!-- end #content -->
</div><!-- end #container -->