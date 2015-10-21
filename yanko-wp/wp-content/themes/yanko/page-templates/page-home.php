<?php 

/*Template Name: Home Page*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
<div id="banner-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->

  <div class="banner banner-slider" style="background: url('<?php echo the_field('banner_img'); ?>'); no-repeat; background-size: cover;">
    <ol class="carousel-indicators">
      <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#banner-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="row">
          <div class="container p-0 m-2">
            <div class="col-md-6 col-xs-12">
              <div class="carousel-caption">
                <h1 class= "carousel-title animated pulse">
                  <?php echo the_field('content_title'); ?>
                </h1>

                <div class="banner-content animated slideInLeft">
                  <?php the_content(); ?>

                <a href="contact-us.php" class="btn btn-info hvr-grow-shadow" role="button">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </div>
          </div>
          <div class="col-md-6">
            <div class="image-holder">
              <img class="carousel-img animated slideInRight" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>" alt="">
            </div>
            
          </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row">
          <div class="container p-0 m-2">
            <div class="col-md-6">
              <div class="carousel-caption">
                <h1 class= "carousel-title animated pulse">
                  <?php echo the_field('content_title'); ?>
                </h1>
                <div class="banner-content animated slideInLeft">
                  <?php the_content(); ?>
                  <a href="contact-us.php" class="btn btn-info hvr-grow-shadow" role="button">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="image-holder">
              <img class="carousel-img animated slideInRight" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>" alt="">
            </div>
          </div>
          </div>
        </div>
      </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
      <span class="icon-banner icon-left-arrow"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
      <span class="icon-banner icon-right-arrow"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
  
</div>
  
	
   <div class="section section-areas">
   	<div class="container">
   		<div class="section-title">
   			<h2>Areas Of Practice</h2>
				<div class="cline-15"></div>
   		</div>

   		<div class="section-content">
   			<div class="row">
          
     				<div class="col-xs-12 col-sm-4 col-md-4">
     					<div class="hovereffect image-holder-prac">
                <?php echo get_the_post_thumbnail(18); ?>
                <a href="<?php echo get_post_permalink(18); ?>">
                  <div class="icon-bg icon-injured"></div>
                  <div class="overlay">
                    <a href="<?php echo get_post_permalink(18); ?>"><h4><?php echo get_the_title(18); ?></h4></a>
                  </div>
                </a>
              </div>

     				</div>
     				<div class="col-xs-12 col-sm-4 col-md-4">
     					<div class="hovereffect image-holder-prac">
                 <?php echo get_the_post_thumbnail(16); ?>
                <a href="<?php echo get_post_permalink(16); ?>">
                  <div class="icon-bg icon-court"></div>
                    <div class="overlay">
                    <a href="<?php echo get_post_permalink(16); ?>"><h4><?php echo get_the_title(16); ?></h4></a>
                  </div>
                </a>
              </div>
     				</div>
     				<div class="col-xs-12 col-sm-4 col-md-4">
     					<div class="hovereffect image-holder-prac">
                <?php echo get_the_post_thumbnail(20); ?>
                <a href="<?php echo get_post_permalink(20); ?>">
                  <div class="icon-bg icon-family"></div>
                    <div class="overlay">
                    <a href="<?php echo get_post_permalink(20); ?>"><h4><?php echo get_the_title(20); ?></h4></a>
                  </div>
                </a>
              </div>
     				</div>
     			</div>
   		</div>
   	</div>
   </div>

   <div class="section section-welcome">
   	<div class="container p-0">
   		<div class="section-title">
   			<h2>Welcome To Yanko & Popovic - Providing Legal Help</h2>
        <div class="cline-50"></div>
   		</div>
   		<div class="section-content">
   			<div class="row">
   				<div class="col-md-6 col-sm-6 col-xs-12">
   					<div class="sec-image-holder">
              <?php echo get_the_post_thumbnail(54); ?>
   					</div>
   				</div>
   				<div class="col-md-6 col-sm-6 col-xs-12 left-padd-5">
   					<div class="section-subtitle">
              <h3>
                <?php echo get_field(content_title, 54); ?>
              </h3>
   					</div>
   					<div class="section-desc">
   						<p>
                <?php 
                  $content_post = get_post(54);
                  $content = $content_post->post_content;
                  $content = str_replace(']]>', ']]&gt;', $content);
                  echo $content;
                ?>
   						</p>
   						<a class="btn btn-default btn-about btn-aboutc icon-arrow-right" href="history.php" role="button">About Us   <!--  <i class="fa fa-long-arrow-right"></i> -->
              </a>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>
  <?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php include ('post-section.php'); ?>
<?php get_footer(); ?>