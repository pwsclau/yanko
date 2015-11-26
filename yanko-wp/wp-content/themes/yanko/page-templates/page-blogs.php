<?php 
/*Template Name: Blog Page*/
get_header();
query_posts(array(
'post_type' => 'blog',
'posts_per_page' => 10,
));
if ( have_posts() ) :  ?>

<div class="subpage-banner" style="background: url('<?php echo the_field('subbanner_image'); ?>') no-repeat; ">
	<h1 class="heading-46 ">
		Blogs
	</h1>
</div>

<div class="section section-blogs">
	<div class="container">
		<div class="row">
			<?php
        $cntr=0;
        while(have_posts()) : the_post(); ?>
					<div class="col-md-3">
						<div class="blog-holder">
							<?php
                global $post;
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                ?>
               <div class="img-featured" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important; max-width:100%;"></div>

							<div class="details-holder">
								<div class="blog-title">
									<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="blog-desc">
									 <p><?php $content = get_the_content(); 
                        echo mb_strimwidth($content, 0, 170, '');  ?></p>
								</div>
								<div class="blog-author">
									<?php $author = get_the_author(); ?> 
									<span>Posted by: <?php echo $author ?></span>
									<span>on <?php the_time('F j, Y'); ?></span>
								</div>
							</div>
						</div>
							
					</div>
			<?php $cntr++; endwhile;?>
		</div>
	</div>
</div>

<?php endif; wp_reset_query();?>
<?php // include ('post-section.php'); ?>
<?php get_footer(); ?>