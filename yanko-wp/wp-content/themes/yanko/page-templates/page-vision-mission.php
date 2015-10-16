<?php 
/*Template Name: Vision Mission Page*/
get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: #000 url('<?php echo the_field('banner_img'); ?>') no-repeat; ">
		
		<h1 class="heading-46 ">
			VISION MISSION
		</h1>
	</div>
	
	<div class="section section-vismis">
		<div class="container">
			<div class="section-holder">
				<h2 class = "section-title">Our Vision</h2>
				<?php 
		          $my_postid = 68;
		          $content_post = get_post($my_postid);
		          $content = $content_post->post_content;
		          $content = apply_filters('the_content', $content);
		          $content = str_replace(']]>', ']]&gt;', $content);
		          echo $content;
		        ?>
			</div>
			<div class="section-holder m10">
				<div class="section-title">
					<h2>Our Mission</h2>
				</div>
				<?php 
		          $my_postid = 70;
		          $content_post = get_post($my_postid);
		          $content = $content_post->post_content;
		          $content = apply_filters('the_content', $content);
		          $content = str_replace(']]>', ']]&gt;', $content);
		          echo $content;
		        ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php include ('post-section.php'); ?>
<?php get_footer(); ?>