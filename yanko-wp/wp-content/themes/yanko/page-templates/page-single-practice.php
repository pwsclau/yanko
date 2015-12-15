<?php 
/*Template Name: Single Practice Page*/
get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: #000 url('<?php echo the_field('subbanner_image'); ?>') no-repeat;">
		
		<h1 class="heading-46 ">
			<?php the_title(); ?>
		</h1>
	</div>

	<div class="section section-practice animated fadeIn">
		<div id="single-practice" class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="section-title">
						<h2><?php the_field('content_title'); ?></h2>
						<div class="line-16"></div>
					</div>
					<div class="section-desc">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="practice-lawyers">
						<div class="section-title">
							<h4>Practicing Lawyers</h4>
							<div class="line-16-left"></div>
						</div>



						<ul class="list-side-lawyers list-icon">
							<li><a href="<?php echo get_post_permalink(8); ?>">David Yanko</a></li>
							<li><a href="<?php echo get_post_permalink(8); ?>">Brad Popovic</a></li>
							<li><a href="<?php echo get_post_permalink(8); ?>">Helmut Ehms</a></li>
							<li><a href="<?php echo get_post_permalink(8); ?>">Herman Sidhu</a></li>
							<li><a href="<?php echo get_post_permalink(8); ?>">Adam Alladin</a></li>
							<li><a href="<?php echo get_post_permalink(8); ?>">James Uniacke</a></li>
						</ul>


					</div>
					<div class="awards">
						<h4>Awards</h4>
						
						<div class="line-8-5"></div>
							<?php 
                if( have_rows('list_of_awards', 259) ): 
                  while( have_rows('list_of_awards', 259) ): the_row();
                  $award= get_sub_field('award');
              ?>
							<div class="award-img-holder">
								<div class="gap-10"></div>
									<img src="<?php echo $award ?>" alt="">
							</div>

								<?php endwhile; ?>
		          <?php endif; ?>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>