<?php 
/* Template Name: History Page */
get_header(); ?>
	<div class="subpage-banner history-subpg">
		<h1 class = "heading-46">OUR HISTORY</h1>
	</div>

	<div class="section section-history">
		<div class="container">
			<div class="section-holder">
				<h2 class = "section-title">Yanko & Popovic</h2>
				<div class="cline-15"></div>
					<?php 
            $my_postid = 65;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
          ?>
			</div>

			<div class="history-content">
				<div class="row">

					<div class="history-content-holder animated slideInLeft">
						<div class="col-md-6">
							<div class="history-desc">
								<h2 class="section-title title-left">What We Do</h2>
								<div class="line-12-left"></div>
								
								<!-- What We Do Content -->
								<?php 
				            $my_postid = 61;
				            $content_post = get_post($my_postid);
				            $content = $content_post->post_content;
				            $content = apply_filters('the_content', $content);
				            $content = str_replace(']]>', ']]&gt;', $content);
				            echo $content;
				          ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="hist-img-holder">
								<?php echo get_the_post_thumbnail(61); ?>
							</div>
						</div>
					</div>

					<div class="history-content-holder animated slideInRight">
					<div class="col-md-6">
						<div class="hist-img-holder">
							<?php echo get_the_post_thumbnail(6); ?>
						<!-- 	<img src="<?php echo get_template_directory_uri(); ?>/images/hist1.jpg"> -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="history-desc">
							<h2 class="section-title title-left ">History</h2>
						<div class="line-12-left"></div>
						<?php 
	            $my_postid = 6;
	            $content_post = get_post($my_postid);
	            $content = $content_post->post_content;
	            $content = apply_filters('the_content', $content);
	            $content = str_replace(']]>', ']]&gt;', $content);
	            echo $content;
	          ?>
						</div>
					</div>
				</div>

				</div>
			</div>
		</div>
		</div>
	</div>

<?php include ('post-section.php'); ?>
<?php get_footer(); ?>