<?php
/*Template Name: Lawyers Page */
get_header();

query_posts(array(
'post_type' => 'lawyer',
'posts_per_page' => 10,
));
if ( have_posts() ) : ?>
  <div class="subpage-banner lawyers-subpg">
    <h1 class ="heading-46">OUR ATTORNEYS</h1>
  </div>

  <div class="section section-team">
    <div class="container">
      <div class="section-title">
        <h2>Meet The Team</h2>
        <div class="cline-15"></div>
      </div>
      <div class="section-desc">
        <p>
          <?php 
            $content_post = get_post(8);
            $content = $content_post->post_content;
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
          ?>
        </p>
      </div>

      <div class="lawyer-wrapper">
        <div class="row">
          <?php
          $cntr=0;
          while(have_posts()) : the_post(); ?>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="lawyer-holder">
                <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="details-lawyer">
                      <h3><?php the_title(); ?></h3>
                        <h4>(<?php the_field('lawyer_title'); ?>)</h4>
                        <p><?php $content = get_the_content(); 
                                echo mb_strimwidth($content, 0, 100, '...');  ?></p>
                        
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $cntr;?>">READ MORE</button>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-5">
                  <?php
                        global $post;
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                        ?>
                    <div class="img-lawyer-holder" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-position: center 30% !important; max-width:100%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $cntr++; endwhile;?>
      </div>
      </div>
    </div>
  </div>
  
  <?php
  $i=0;
  while(have_posts()) : the_post(); ?>
  <div class="modal fade" id="<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="lawyer-modal-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           

            <div class="modal-img" >
             <?php the_post_thumbnail(); ?>
            </div>

            <h2 class="modal-title" id="lawyer-modal-label"><?php the_title(); ?></h2>
            <h4>(Founder & Managing Partner)</h4>

            <ul class="sm-list">
              <li>
                <a href="#"><i class="fa fa-facebook sm-links"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter sm-links"></i></a>
                 
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin-square sm-links"></i></a>
                </li>
            </ul>
          </div>
          <div class="modal-body">
              <?php the_content(); ?>
            
        
            <h4 class="modal-subtitle">Assistants To Mr. <?php the_title(); ?></h4>
            <div class="line-16-left"></div>
            
            <ul class ="list-icon">
              <?php 
                if( have_rows('assistants_lawyer') ): 
                  while( have_rows('assistants_lawyer') ): the_row();
                  $name_assistants= get_sub_field('name_assistants');
              ?>
                  <li><?php echo $name_assistants ?></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php $i++; endwhile; ?>
  <?php endif; wp_reset_query();?>
<?php include ('post-section.php'); ?>
<?php get_footer(); ?>