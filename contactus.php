<?php
/**
 * Template Name: Contact Us
 *

 */
 
get_header(); ?>

	
		<div id="banner-area">
		<img src="images/contact-us.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<!--<div class="text-center">
		        	
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#"> Contact</a></li>
		          	</ul>
	          	</div>-->
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
			<div class="row">
				<!-- Map start here -->
				<!--<div id="map-wrapper" class="no-padding">
					<div class="map" id="map"></div>
				</div><!--/ Map end here -->	

			</div><!-- Content row  end -->

			<div class="gap-40"></div>

			<div class="row">
	    		<div class="col-md-7">
	    		<?php echo do_shortcode("[sform id='56']"); ?>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
			    		<p><i class="fa fa-home info"></i>Redshore Technologies Pvt.Ltd, Plot No:44, 4th Floor, 9th Phase,KPHB colony,Hyderabad,Telangana -500072</p>
						<p><i class="fa fa-phone info"></i>+91 7799092929</p>
						<p><i class="fa fa-envelope-o info"></i>  info@redshoretech.com</p>
						<p><i class="fa fa-globe info"></i>www.redshoretech.com</p>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	

	<!-- Footer start -->
	<section id="footer" class="footer footer-map">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="footer-logo">
						<div class="col-md-4">
                        	<h4>SERVICES</h4>
                        	<ul class="footerlist">
                            	<li><a href="#">Managed Services</a></li>
                                <li><a href="#">Performance Tuning</a></li>
                                <li><a href="#">Implementation</a></li>
                                <li><a href="#">Upgrades</a></li>
                            </ul>
                        </div>
                        <!--<div class="col-md-4">
                        	<h4>Expertise</h4>
                            <ul class="footerlist">
                            	<li><a href="#">Health Care</a></li>
                                <li><a href="#">Automobile</a></li>
                                <li><a href="#">Banking</a></li>
                                <li><a href="#">Telecmmunication</a></li>
                                <li><a href="#">Energy</a></li>
                            </ul>
                        </div>-->
                        <div class="col-md-4">
                        	<h4>Contact Us & Corporate Office</h4>
                        	<ul class="footerlastlist">
                            	<li><i class="fa fa-map-marker"></i>
                                	Address: Redshore Technologies Pvt.Ltd, Plot No:44, 4th Floor, 9th Phase,KPHB colony,Hyderabad,Telangana -500072
                                </li>
                                <li><i class="fa fa-mobile"></i>
                                	+91 7799092929
                                </li>
                                <li><i class="fa fa-envelope"></i>
                                	info@redshoretech.com
                                </li>
                            </ul>
                        </div>
					</div>
					<div class="gap-20"></div>
					
				</div>
			</div><!--/ Row end -->
			
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix" data-original-title="" title="">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
            
		</div><!--/ Container end -->
	</section><!--/ Footer end -->
   
<?php get_footer(); ?>
