<?php
/**
 * Template Name: Aboutus
 *

 */

get_header(); ?>

	<div id="banner-area">
		<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus2.jpg" height="300" width="1360"alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<!--<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>About Us</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#"> About Us</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">About Our Company
						<span class="title-desc">
						<?php $page = get_post();

$content = apply_filters('the_content', $page->post_content); 
echo $content;
?>
						</span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<!--<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
					<h3>Who We Are</h3>
					<p>"Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet mattis ut consequat mauris cursus.</p>
					<p>Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere element ante."</p>
				</div><!--/ About message end -->
				<!--<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/img1.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			<!--</div>--><!--/ Content row end -->

			<!--<div class="row about-wrapper-bottom">
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/ban.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<!--<div class="col-md-6 ts-padding about-message">
					<h3>What We Do</h3>
					<p>"Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis.</p>
					<ul class="unstyled arrow">
						<li><a href="#">Etiam porta sem malesuada</a></li>
						<li><a href="#">Pellentesque ornare sem lacinia</a></li>
						<li><a href="#">Cras mattis consectetur purus</a></li>
						<li><a href="#">Sed hendrerit quam sed ante</a></li>
					</ul>
				</div><!--/ About message end -->
			<!--</div>--><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

			
		<!--<div class="gap-40"></div>
        
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
