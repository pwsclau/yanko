<?php 
/*Template Name: Single Practice Page*/
get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: url('<?php echo the_field('banner_img'); ?>') no-repeat; ">
		
		<h1 class="heading-46 ">
			<?php the_title(); ?>
		</h1>
	</div>

	<div class="section section-practice">
		<div class="container">
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
					<div class="section-title">
						<h4>Practising Lawyers</h4>
						<div class="line-16-left"></div>
					</div>
					<ul class="list-icon">
						<li><a href="<?php echo get_post_permalink(8); ?>">David Yanko</a></li>
						<li><a href="<?php echo get_post_permalink(8); ?>">Brad Popovic</a></li>
						<li><a href="<?php echo get_post_permalink(8); ?>">Helmut Ehms</a></li>
						<li><a href="<?php echo get_post_permalink(8); ?>">Herman Sidhu</a></li>
						<li><a href="<?php echo get_post_permalink(8); ?>">James Uniacke</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php include ('post-section.php'); ?>
<?php get_footer(); ?>