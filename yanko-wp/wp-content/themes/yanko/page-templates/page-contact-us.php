<?php 
/* Template Name: Contact Us Page*/
get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: #000 url('<?php echo the_field('banner_img'); ?>') no-repeat; ">
		
		<h1 class="heading-46 ">
			CONTACT US
		</h1>
	</div>

	<div class="section section-contact">
		<div class="container">
			<div class="row">
					<div class="col-md-8 para-18">

						<div class="section-title left-title">
							<h2> <?php the_field('content_title'); ?> </h2>
						<!-- 	<div class="line-20"></div> -->
						<div class="line-16"></div>
						</div>
						<?php the_content(); ?>

						<div class="form-wrapper">
							<?php echo do_shortcode('[contact-form-7 id="42" title="Contact Us"]'); ?>
						</div>
					</div>
					<div class="col-md-4 para-16" >
						<h2 class="section-title left">Contact Info</h2>
						<div class="line-16"></div>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<span>
									Suite 301, 300 Manning Road N.E., <br>
									Calgary, Alberta <br>
									T2E 8K4
								</span>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<span>
									yanko&popovic@yplaw.ca
								</span>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<span>
									403.262.0262<br>
									403.204.0284
								</span>
							</li>
						</ul>
					</div>
				</div>
		</div>
	</div>

	<div class="location-map" id="googleMap">
		
	</div>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>