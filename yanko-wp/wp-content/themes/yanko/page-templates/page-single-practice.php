<?php 
/*Template Name: Single Practice Page*/
get_header(); ?>

<?php include ('header.php'); ?>

	<div class="subpage-banner practice-subpg">
		<!-- <img src="images/subpg-banner.jpg"> -->
		<h1 class="heading-46 "><?php the_title(); ?></h1>
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
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h4>Practising Lawyers</h4>
						<div class="line-16-left"></div>
					</div>
					<ul class="list-icon">
						<li><a href="">David Yanko</a></li>
						<li><a href="">Brad Popovic</a></li>
						<li><a href="">Helmut Ehms</a></li>
						<li><a href="">Herman Sidhu</a></li>
						<li><a href="">James Uniacke</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php include ('post-section.php'); ?>
<?php get_footer(); ?>