<?php
/**
 * Template Name: Services
 *

 */
 
get_header(); ?>

	
		<div id="banner-area">
		<img src="<?php echo get_template_directory_uri(); 
?>/images/training.png" width="1350" height="300"alt ="" />
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
          	</div>--><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-desktop"></i></span>
					<h2 class="title classic">Our Services</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="landing-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-4 col-sm-6">
								<?php 	$loop = new WP_Query( array( 'post_type' => 'services') );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="<?php if($i==0){ echo 'active'; } ?>" >
			<a class="animated fadeIn" href="#tab_<?php the_id(); ?>" data-toggle="tab">
			<div class="tab-info">
						  			<h3><?php the_title(); ?></h3>
					  			</div>	
					  		</a>
			<?php  
			
			 
			  echo '</li>';
			  $i++;
			  	
			endwhile;
			?>
					  		
					  
					  
					</ul>
					<div class="tab-content col-md-8 col-sm-6">
				       <?php 	$loop = new WP_Query( array( 'post_type' => 'services','orderby' => 'date',
	'order' => 'ASC',  'posts_per_page' => -1) );
		$i=0;
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <div class="tab-pane animated active fadeInLeft" id="tab_<?php  the_id();  ?>">
				        	<!--<i class="fa fa-briefcase big"></i>-->
				            
							     <?php  the_content();
			
			 
			  echo '</div>';
			  $i++;
			  	
			endwhile;
			?>
				    
					</div><!-- tab content -->
	    		</div><!-- Overview tab end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

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
    
    <div class="copyrightdiv">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copyright-info">
                @ Copyright 2016 Redshore Technologies Inc. All Rights Reserved</span>
                </div>
            </div>
        </div><!--/ Row end -->
    </div>

<?php get_footer(); ?>
