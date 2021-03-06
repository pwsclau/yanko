<?php 
/* Template Name: History Page */
get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="subpage-banner" style="background: #000 url('<?php echo the_field('subbanner_image'); ?>') no-repeat;">
			<h1 class="heading-46 ">
				OUR HISTORY
			</h1>
	</div>

	<div class="section section-history">
		<div class="container">
			<div id="history-subdesc"class="section-holder animated fadeIn">
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
				<div id="what-we-do" class="history-content-holder">
					<div class="history-desc">
						<h2 class="section-title">What We Do</h2>
						<div class="cline-12"></div>
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
				
					<div id="history" class="history-content-holder">
						<div class="history-desc">
							<h2 class="section-title">History</h2>
						<div class="cline-12"></div>
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
					
				<!-- <div class="row">
					<div id="what-we-do"class="history-content-holder animated fadeInLeft">
						<div class="col-md-6">
							<div class="history-desc">
								<h2 class="section-title title-left">What We Do</h2>
								<div class="line-12-left"></div>
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
							<?php
		            global $post;
		            $src = wp_get_attachment_image_src( get_post_thumbnail_id(61), 'full', false, '' );
		            ?>
								<div class="hist-img-holder" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important"> 
		            </div> 
						</div>
					</div>

					<div id="history"class="history-content-holder animated fadeInRight">
						<div class="col-md-6">
							<?php
		            global $post;
		            $src = wp_get_attachment_image_src( get_post_thumbnail_id(6), 'full', false, '' );
	            ?>
							<div class="hist-img-holder" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important"> 
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
				</div> -->

			</div>
		</div>
		</div>
<!-- 	</div> -->
	<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>