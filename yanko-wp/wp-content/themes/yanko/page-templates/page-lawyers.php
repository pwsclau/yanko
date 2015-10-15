<?php
/*Template Name: Lawyers Page */
get_header();?>

	<div class="subpage-banner lawyers-subpg">
		<!-- <img src="images/subpg-banner-lawyers.jpg"> -->
		<h1 class ="heading-46">OUR ATTORNEYS</h1>
	</div>

	<div class="section section-team">
		<div class="container">
			<div class="section-title">
				<h2 class = "animated zoomIn">Meet The Team</h2>
				<div class="cline-15"></div>
			</div>
			<div class="section-desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>

			<div class="lawyer-wrapper">
				<div class="row">

					<?php
              $ctr = 0;
              query_posts(array(
              'post_type' => 'post_type'
              ));
              if ( have_posts() ) : ?>
                <?php while(have_posts()) : the_post(); ?>

	              <div class="col-md-6 col-sm-12 col-xs-12">
									<div class="lawyer-holder">
										<div class="row">
											<div class="col-md-7 col-sm-7 col-xs-7">
												<div class="details-lawyer">
													<h3> <?php the_title(); ?> </h3>
														<h4> <?php the_field('lawyer_title') ?> </h4>
														<p> <?php the_field('lawyer_desc_summary') ?> </p>
														<button type="button" class="btn btn-default" data-toggle="modal" data-target="#lawyer_data">READ MORE</button>
												</div>
											</div>
											<div class="col-md-5 col-sm-5 col-xs-5">
												<div class="img-lawyer-holder">
													<!-- <img src="<?php echo $lawyer_img['url']; ?>" alt=""> -->
													<?php the_post_thumbnail(); ?>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php $ctr++; endwhile; wp_reset_query(); ?>
              <?php endif; ?>

				</div>
			</div>

		</div>
	</div>
	 <!-- Modal -->
    <div class="modal fade" id="lawyer_data" tabindex="-1" role="dialog" aria-labelledby="lawyer-modal-label">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-img">
              <!-- <img src="images/david4.png" alt=""> -->
              <div class="modal-icon">               
              </div>
              
            </div>
            <h2 class="modal-title" id="lawyer-modal-label">David G. Yanko</h2>
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
            <p>
              David Yanko obtained his Law degree from the University of Saskatchewan. He then articled with the prestigious firm of Phelan O'Brien & Rutherford in Toronto and was admitted to the Law Society of Upper Canada graduating with Honours. David then returned west to Calgary and was admitted as a Lawyer with the Law Society of Alberta and later with the Law Society of British Columbia. In David's early years as a Lawyer he practiced Criminal Law. Over the years David Yanko conducted approximately six hundred trials from murder to robbery and assault charges, primarily in Alberta, but also in British Columbia and Saskatchewan. He has appeared in all levels of the court in Alberta and British Columbia from Provincial Court to the Court of Appeal on numerous occasions.

              <br><br>

              In the 1990s David G. Yanko began increasing his practice in the area of personal injury and eventually developed his firm of Yanko & Company to one of the largest personal injury practices in Calgary. Yanko & Company had a staff of approximately fifty employees. David Yanko has had approximately 25 students article under him. Many of these students who have articled for Dave Yanko have gone on to experience successful careers. Three of David Yanko's prize students are Brad Popovic, Helmut Ehms and Herman Sidhu.. As a result of the rewarding relationship that David and Brad developed, they decided to operate a firm under the name of Yanko & Popovic where David Yanko practices in the area of personal injury along with Helmut Ehms, Herman Sidhu and others.
              
              <br><br>

              Over his years of practice David Yanko has handled over ten thousand personal injury cases on behalf of clients with injuries ranging from simple whiplash to quadriplegia and traumatic brain injury. David has handled serious and complex personal injury cases including car accidents, truck accidents, motorcycle accidents, slip and falls, and wrongful death cases. David practices exclusively in personal injury claims in Alberta and British Columbia.
            </p>
            
            <h4 class="modal-subtitle">Assistants To Mr. Yanko</h4>
            <div class="line-16-left"></div>
            <ul class ="list-icon">
              <li>Bridget Jacobs</li>
              <li>San Kwok</li>
              <li>Evelyn Jacobs</li>
              <li>Martina Tomic</li>
              <li>Adam Alladin</li>
              <li>Harry Sidhu</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


<?php include ('post-section.php'); ?>
<?php get_footer(); ?>