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

	<div class="footer">
      <div class="container">
        <div class="row p5-left-right">

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-details">
              <h4>AREAS OF PRACTICE</h4>
              <ul>
                <li><a href="area-of-practice.php">Personal Injury</a></li>
                <li><a href="area-of-practice.php">Criminal Law</a></li>
                <li><a href="area-of-practice.php">Family Law</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-details">
              <h4>QUICK LINKS</h4>
              <ul>
                <li><a href="">About us</a></li>
                <li> <a href="lawyers.php">Lawyers</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="contact-us.php">Contact us</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="location">
              
              <div class="footer-details">
                <h4>OUR LOCATION</h4>
                <i class="fa fa-map-marker"></i>
                <span class = "ml-10">Suite 301, 300 Manning Road N.E. Calgary, Alberta T2E 8K4</span>
              </div>
            </div>

            <div class="contact-info">
              <div class="footer-details">
                 <h4>CONTACT INFO</h4>
                <div class="mail">
                  <i class="fa fa-envelope-o"></i>
                  <span class = "ml-10">yanko&popovic@yplaw.com</span>
                </div>
                <div class="tele">
                  <i class="fa fa-phone"></i>
                  <span class = "ml-10">403.262.0262</span>
                  <p class = "ml-27"> 403.204.0284</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <h4>SOCIAL MEDIA</h4>
              <ul class = "sm-list">
                <li>
                  <a href="#"><i class="fa fa-facebook sm-links gray-er"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter sm-links gray-er"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin-square sm-links gray-er"></i></a>
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<?php wp_footer(); ?>

</body>
</html>
