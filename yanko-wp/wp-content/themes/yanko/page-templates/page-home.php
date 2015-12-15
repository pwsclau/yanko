<?php 

/*Template Name: Home Page*/

get_header(); ?>


  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style ="background: url('<?php echo get_template_directory_uri() ?>/images/carousel.jpg');">
    <div class="item active">
      <div class="carousel-caption">
        Yanko & Popovic
      </div>
    </div>
    <div class="item">
      <div class="carousel-caption">
        Personal Injury Lawyers in Calgary
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="headers-holder">
  <div class="container-fluid">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="header-single-holder">
         
          <div class="section-title">
            <h2>About Us</h2>
            <div class="cline-13"></div>
          </div>

          <div class="section-content">
             <div class="icon-scale"></div>
            <div class="section-desc text-center">

              <p>
                <?php 
                  $content_post = get_post(25);
                  $content = $content_post->post_content;
                  $content = str_replace(']]>', ']]&gt;', $content);
                  echo $content;
                ?>
              </p>
             <!--  <a class="btn btn-default btn-about btn-aboutc icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(18); ?>" role="button">Read More</a> -->
             <a href="<?php echo get_post_permalink(18); ?>" class="btn btn-default btn-about icon-arrow-right hvr-grow btn-center" role="button">Read More</a>
            </div>
          </div>
        </div>
      </div>

       <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="header-single-holder">
          
          <div class="section-title">
          <h2>Our Team</h2>
          <div class="cline-13"></div>
        </div>
        <div class="section-content">
          <div class="icon-team"></div>
          <div class="section-desc text-center">
            <p>
              <?php 
                $content_post = get_post(8);
                $content = $content_post->post_content;
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
              ?>
            </p>
            <a class="btn btn-default btn-about icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(8); ?>" role="button">Read More</a>
          </div>
        </div>
        
      </div>

      </div>

       <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="header-single-holder">
          <div class="section-title">
             <h2>Contact Us</h2>
             <div class="cline-13"></div>
           </div>
           <div class="section-content">
              <div class="icon-map-marker"></div>
             <div class="section-desc text-center">
               <p><?php echo get_field('contact_us_desc', 12); ?></p>
               <a class="btn btn-default btn-about icon-arrow-right hvr-grow btn-center" href="<?php echo get_post_permalink(12); ?>" role="button">Read More</a>
             </div>
           </div>
        </div>

      </div>

    </div>
  </div>
</div>



<?php get_footer(); ?>