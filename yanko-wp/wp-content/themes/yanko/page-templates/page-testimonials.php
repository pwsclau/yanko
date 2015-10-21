<?php 
/*Template Name: Testimonial Page*/
get_header(); 

query_posts(array(
'post_type' => 'testimonial',
'posts_per_page' => 10,
));
if ( have_posts() ) : ?>


	<div class="section section-testimonials">
		<div class="container">
			<h2 class="section-title">Testimonials</h2>
		<div class="row">
			 <?php
          $cntr=0;
          while(have_posts()) : the_post(); ?>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="testimonial-holder">
                <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="details-lawyer">
                      <h3><?php the_title(); ?></h3>
                        <p><?php $content = get_the_content(); 
                            echo mb_strimwidth($content, 0, 150, '...');  ?></p>
                        
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $cntr;?>">READ MORE</button>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-5">
                  <?php
                        global $post;
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                        ?>
                    <div class="img-testimonial-holder" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important; max-width:100%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $cntr++; endwhile;?>
		</div>
		</div>
			
	</div>  
<?php endif; wp_reset_query();?>
<?php include ('post-section.php'); ?>
<?php get_footer(); ?>