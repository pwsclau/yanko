<?php 

/*Template Name: Home Page*/

get_header(); ?>

<div id="banner-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->

   <?php 
      $cntr = 0;
      if( have_rows('banner') ): 
      while( have_rows('banner') ): the_row();
      $banner_image= get_sub_field('banner_image');
      $banner_title= get_sub_field('banner_content_title');
      $banner_content= get_sub_field('banner_content_desc');
    ?>

  <div class="banner banner-slider" style="background: url('<?php echo $banner_image; ?>');">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item <?php echo ($cntr == 0) ? 'active' : ''; ?>">
        <div class="container">
            <div class="carousel-caption">
                <h1 class= "carousel-title animated pulse">
                  <?php echo $banner_title; ?>
                </h1>

                <div class="banner-content">
                  <a href="<?php echo get_post_permalink(18); ?>" class="btn btn-info hvr-grow-shadow" role="button">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?php $cntr++; endwhile; ?>
    <?php endif; ?>

</div>


<div class="headers-holder">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4">
        <div class="header-single-holder">
          <div class="section-title">
            <h2>About Us</h2>
            <div class="cline-13"></div>
          </div>
          <div class="section-content">
            <div class="section-desc">
              <p>
                <?php 
                  $content_post = get_post(25);
                  $content = $content_post->post_content;
                  $content = str_replace(']]>', ']]&gt;', $content);
                  echo $content;
                ?>
              </p>
              <a class="btn btn-default btn-about btn-aboutc icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(18); ?>" role="button">Read More</a>
            </div>
          </div>
        </div>
      </div>

       <div class="col-md-4">
        <div class="header-single-holder">
          <div class="section-title">
          <h2>Our Team</h2>
          <div class="cline-13"></div>
        </div>
        <div class="section-content">
          <div class="section-desc">
            <p>
              <?php 
                $content_post = get_post(54);
                $content = $content_post->post_content;
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
              ?>
            </p>
            <a class="btn btn-default btn-about btn-aboutc icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(2); ?>" role="button">Read More</a>
          </div>
        </div>
        
      </div>

      </div>

       <div class="col-md-4">
        <div class="header-single-holder">
          <div class="section-title">
             <h2>Contact Us</h2>
             <div class="cline-13"></div>
           </div>
           <div class="section-content">
             <div class="section-desc">
               <p><?php echo get_field('contact_us_desc', 12); ?></p>
               <a class="btn btn-default btn-about btn-aboutc icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(12); ?>" role="button">Read More</a>
             </div>
           </div>
        </div>

      </div>

    </div>
  </div>
</div>



<?php get_footer(); ?>