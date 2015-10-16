<div class="section section-post">
   	<div class="container">
   		<div class="row">


   			<div class="col-md-6 right-padd-10">
   				<div class="section-subtitle">
   					<h2 class = "post-subtitle">Latest News</h2>
   				</div>
				
				<!-- Carousel -->

  				<div id="news-carousel" class="carousel slide" data-ride="carousel" data-interval= "false">

            <div class="carousel-inner" role="listbox">
              <?php
              $cntr = 0;
              query_posts(array(
              'post_type' => 'post'
              ));
              if ( have_posts() ) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="item <?php echo ($cntr == 0) ? 'active' : ''; ?>">

                      <?php
                        global $post;
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                        ?>
                    <div class="post-img-holder" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important">
                         
                    </div> 
                      
                        <div class="carousel-caption">
                           <div class="row">
                             <div class="col-md-2 col-sm-2">
                               <div class="date-wrap">
                                <span class="white-date">
                                  <?php the_time('d') ?>
                                </span>
                                <span class="blue-date">
                                  <?php the_time('M') ?>
                                </span>
                              </div>
                             </div>
                             <div class="col-md-10 col-md-10">
                               <h4><?php the_title(); ?></h4>
                             </div>
                           </div>
                           <div class="desc">
                              <?php the_content(); ?>
                           </div>
                        </div>
                    </div>
                <?php $cntr++; endwhile; wp_reset_query(); ?>
              <?php endif; ?>
              
            </div>

           <div class="carousel-arrows">
              <a href="#news-carousel" role="button" class="btn btn-default arrows" data-slide="prev"><i class="fa fa-long-arrow-left"> </i></a>
              <a href="#news-carousel" role="button" class="btn btn-default arrows" data-slide="next"><i class="fa fa-long-arrow-right"></i></a>
          </div>
   			</div>
      </div>


   			<div class="col-md-6 ">
   				<div class="section-subtitle  request-wrapper">
   					<h2 class = "post-subtitle">Request Info</h2>
   				</div>

          <div class="form-wrapper">
            <h4>Fill out the form to receive a free confidential consultation</h4>
            <?php echo do_shortcode('[contact-form-7 id="41" title="Post Section Form"]'); ?>
          </div>

   			</div>
   		</div>
   	</div>
   </div>