<?php 
/* Template Name: Contact Us Page*/
get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: #000 url('<?php echo the_field('subbanner_image'); ?>') no-repeat; ">
		
		<h1 class="heading-46 ">
			CONTACT US
		</h1>
	</div>

	<div class="section section-contact">
		<div id="contact-sec" class="container animated fadeIn">
			<div class="row">
					<div class="col-md-8 para-18">

						<div class="section-title left-title">
							<h2> <?php the_field('content_title'); ?> </h2>
							<div class="line-16"></div>
						</div>
						
						<div class="yp-foyer-section">
							<div class="yp-foyer-img-holder">
									<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(12), 'full' ); ?>" alt="">
								</div>
						</div>


						<?php the_content(); ?>

						<div class="form-wrapper">
							<?php echo do_shortcode('[contact-form-7 id="42" title="Contact Us"]'); ?>
						</div>
					</div>
					<div class="col-md-4 para-16" >
						<div class="sectio-title left-title">
							<h2 class="left">Contact Info</h2>
							<div class="line-16"></div>
						</div>
						
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<?php if(of_get_option('address', '')){?>
                  <span class="ml-10">
                    <a href="<?php echo of_get_option('address', '');  ?>" target="_blank"><?php echo of_get_option('address', '');  ?></a>
                  </span>
                <?php } ?>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<?php if(of_get_option('email', '')){?>
                  <span class="ml-10">
                    <a href="mailto:<?php echo of_get_option('email', '');  ?>" target="_blank"><?php echo of_get_option('email', '');  ?></a>
                  </span>
                <?php } ?>
							</li>
							<li>
								
								<ul class="contact-number-list">
									<?php if(of_get_option('telephone', '')){?>
                    <li>
                      <i class="fa fa-phone"></i><a href="tel:<?php echo of_get_option('telephone', '');  ?>" target="_blank"> <?php echo of_get_option('telephone', '');  ?></a>
                    </li>
                  <?php } ?>
                  <?php if(of_get_option('faxnumber', '')){?>
                        <li>
                          <a href="tel:<?php echo of_get_option('faxnumber', '');  ?>" target="_blank"><?php echo of_get_option('faxnumber', '');  ?></a>
                        </li>
                     <?php } ?>
								</ul>
								
							</li>
						</ul>
					</div>
				</div>
		</div>
	</div>

	



	<div class="container-fluid">
		<iframe src="<?php echo get_field('google_map',12) ?>" width="100%" height="450"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>