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
									<?php echo get_field('address', 12) ?>
								</span>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<span>
									<?php echo get_field('email_address', 12) ?>
								</span>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<ul class="contact-number-list">
									<?php 
		                if( have_rows('phone_numbers') ): 
		                  while( have_rows('phone_numbers') ): the_row();
		                  $number= get_sub_field('phone_number');
		              ?>
		                  <li><?php echo $number ?></li>
		                <?php endwhile; ?>
		              <?php endif; ?>
								</ul>
								
							</li>
						</ul>
					</div>
				</div>
		</div>
	</div>

	<!-- <div class="location-map" id="googleMap">
		
	</div> -->
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.9320721597815!2d-114.01865144851608!3d51.0543420514475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717acb148f1ec7%3A0x9be97e34df7de505!2s300+Manning+Rd+NE+%23301%2C+Calgary%2C+AB+T2E+8K4%2C+Canada!5e0!3m2!1sen!2sph!4v1445390247584" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	<iframe src="<?php echo get_field('google_map',12) ?>" width="100%" height="450"  frameborder="0" style="border:0" allowfullscreen></iframe>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>