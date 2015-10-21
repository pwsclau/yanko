<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
	<div class="footer">
      <div class="container">
        <div class="row p5-left-right">

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-details">
              <h4>AREAS OF PRACTICE</h4>

               <?php 
                  wp_nav_menu( array(
                    'menu'            => 'areas-of-practice'
                  ));
                ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-details">
              <h4>QUICK LINKS</h4>

                <?php 
                  wp_nav_menu( array(
                    'menu'            => 'quick-links',
                    ));
                  ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="location">
              
              <div class="footer-details">
                <h4>OUR LOCATION</h4>
                <i class="fa fa-map-marker"></i>
                <span class = "ml-10"><?php echo get_field('address', 135) ?></span>
              </div>
            </div>

            <div class="contact-info">
              <div class="footer-details">
                 <h4>CONTACT INFO</h4>
                <div class="mail">
                  <i class="fa fa-envelope-o"></i>
                  <span class = "ml-10"><?php echo get_field('email_address', 135) ?></span>
                </div>
                <div class="tele">
                  <i class="fa fa-phone"></i>
                  <ul class="contact-number-list">
                    <?php 
                      if( have_rows('phone_numbers', 135) ): 
                        while( have_rows('phone_numbers', 135) ): the_row();
                        $number= get_sub_field('phone_number');
                    ?>
                        <li><?php echo $number ?></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <h4>SOCIAL MEDIA</h4>
              <ul class = "sm-list">
                <li>
                  <a href="<?php echo get_field('facebook_link', 116) ?>"><i class="fa fa-facebook sm-links gray-er"></i></a>
                </li>
                <li>
                  <a href="<?php echo get_field('twitter_link', 116) ?>"><i class="fa fa-twitter sm-links gray-er"></i></a>
                </li>
                <li>
                  <a href="<?php echo get_field('linked_in_link', 116) ?>"><i class="fa fa-linkedin-square sm-links gray-er"></i></a>
                </li>
              </ul>
          </div>
        </div>

      </div>
      
      <div class="copyright">
        <div class="container">
          <p>&copy; COPYRIGHT 2013 YANKO & POPOVIC, BARRISTERS & SOLICITORS</p>
        </div>
        
      </div>
      
    </div>
    <?php endwhile; ?>
  <?php endif; wp_reset_query(); ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<?php wp_footer(); ?>



</body>
</html>
