<?php
/*Template Name: Lawyers Page */
get_header();

query_posts(array(
'post_type' => 'lawyer',
'posts_per_page' => 10,
));
if ( have_posts() ) : ?>
  <div class="subpage-banner lawyers-subpg" style="background: #000 url('<?php echo the_field('subbanner_image'); ?>') no-repeat;">
    <h1 class ="heading-46">OUR LAWYERS</h1>
  </div>

  <div class="section section-team">
    <div class="container">
      <div id="lawyer-content"class="section-title animated fadeIn">
        <h2>Meet The Team</h2>
        <div class="cline-15"></div>
      </div>
      <div id="lawyer-content"class="section-desc animated fadeIn">
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
            <div class="col-xs-12 col-sm-6 col-md-6">
          <div id="lawyer-holder" class="lawyer-holder animated fadeIn">
            <div class="details-lawyer">
              <h3><?php the_title(); ?></h3>
              <p><?php $content = get_the_content(); 
                            echo mb_strimwidth($content, 0, 150, '...');  ?></p>
               <button type="button" class="btn btn-default hvr-grow" data-toggle="modal" data-target="#<?php echo $cntr;?>">READ MORE</button>
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
             
            <ul class="contact-details">
              <li >
                <?php if( get_field('lawyer_email') ): ?>
                  <span>Email:</span> <a href="mailto:<?php echo get_field('lawyer_email'); ?>"> <?php echo get_field('lawyer_email'); ?></a>
                <?php endif; ?>
                
              </li>
              <li>
                <?php if( get_field('lawyer_phone_number') ): ?>
                 <span>Phone:</span> <a href="tel:<?php echo get_field('lawyer_phone_number') ?>"><?php echo get_field('lawyer_phone_number') ?></a>
                <?php endif; ?>

                <?php if( get_field('lawyer_extension') ): ?>
                  <span>Ext: <?php echo get_field('lawyer_extension') ?></span>
                <?php endif; ?>
                
              </li>
            </ul>
          </div>
          <div class="modal-body">
              <?php the_content(); ?>

              <?php if( get_field('assistants_lawyer') ): ?>
                <h4 class="modal-subtitle">Assistants To Mr. <?php the_title(); ?></h4>
                <div class="line-16-left"></div>
            
                <ul class ="list-icon list-assistants">
                  <?php 
                    if( have_rows('assistants_lawyer') ): 
                      while( have_rows('assistants_lawyer') ): the_row();
                      $name_assistant= get_sub_field('name_assistants');
                      $email_assistant= get_sub_field('email_of_the_assistants');
                      $ext_assistant= get_sub_field('extension_of_the_assistants');
                  ?>
                      <li>
                        <?php echo $name_assistant ?>
                        <div class="assistants-details">
                           <span>Email:</span> <a href="mailto:<?php echo $email_assistant ?>"><?php echo $email_assistant ?></a>
                           <br>
                           <span>Ext: <?php echo $ext_assistant ?></span>
                        </div>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>

              <?php endif; ?>
          </div>


        </div>
      </div>
    </div>
    <?php $i++; endwhile; ?>
  <?php endif; wp_reset_query();?>
<?php get_footer(); ?>