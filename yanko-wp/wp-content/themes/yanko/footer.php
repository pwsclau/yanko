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

                <?php if(of_get_option('address', '')){?>
                  <span class="ml-10">
                    <a href="<?php echo of_get_option('address', '');  ?>" target="_blank"><?php echo of_get_option('address', '');  ?></a>
                  </span>
                <?php } ?>

               
              </div>
            </div>

            <div class="contact-info">
              <div class="footer-details">
                 <h4>CONTACT INFO</h4>
                
                <ul>
                  <li>
                    <i class="fa fa-envelope-o"></i>

                   <?php if(of_get_option('email', '')){?>
                      <span class="ml-10">
                        <a href="mailto:<?php echo of_get_option('email', '');  ?>" target="_blank"><?php echo of_get_option('email', '');  ?></a>
                      </span>
                    <?php } ?>

                  </li>
                  <li>
                    <ul class="contact-number-list">
                    
                    <?php if(of_get_option('telephone', '')){?>
                      <li>
                        <i class="fa fa-phone"></i>&nbsp;<a href="tel:<?php echo of_get_option('telephone', '');  ?>" target="_blank"><?php echo of_get_option('telephone', '');  ?></a>
                      </li>
                    <?php } ?>

                    <?php if(of_get_option('faxnumber', '')){?>
                      <li class="tele-link">
                        <a href="tel:<?php echo of_get_option('faxnumber', '');  ?>" target="_blank"><?php echo of_get_option('faxnumber', '');  ?></a>
                      </li>
                   <?php } ?>

                  </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <h4>SOCIAL MEDIA</h4>
              <ul class = "sm-list">

                <?php if(of_get_option('facebook', '')){?>
                  <li>
                    <a href="<?php echo of_get_option('facebook', '');  ?>" target="_blank"><i class="fa fa-facebook sm-links gray-er"></i></a>
                  </li>
                 <?php } ?>
                
                <?php if(of_get_option('twitter', '')){?>
                  <li>
                    <a href="<?php echo of_get_option('twitter', '');  ?>" target="_blank"><i class="fa fa-twitter sm-links gray-er"></i></a>
                  </li>
                <?php } ?>
                <?php if(of_get_option('linkedin', '')){?>
                  <li>
                    <a href="<?php echo of_get_option('linkedin', '');  ?>" target="_blank"><i class="fa fa-linkedin-square sm-links gray-er"></i></a>
                  </li>
                <?php } ?>
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
