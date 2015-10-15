<?php include ('header.php'); ?>

  <div id="banner-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->

  <div class="banner banner-slider">
    <ol class="carousel-indicators">
      <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#banner-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="row">
          <div class="container p-0 m-2">
            <div class="col-md-6">
              <div class="carousel-caption">
                <h1 class= "carousel-title animated pulse">Need Legal Assistance?</h1>

                <div class="banner-content animated slideInLeft">
                  <p class= "carousel-desc ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>


                <!-- <a href = "lawyers.php"class = "hvr-grow-shadow">LEARN MORE <i class="fa fa-long-arrow-right"></i></a> -->

                <a href="contact-us.php" class="btn btn-info hvr-grow-shadow" role="button">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </div>
          </div>
          <div class="col-md-6">
            <div class="image-holder">
              <img class="carousel-img animated slideInRight" src="images/attorney.png" alt="">
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
                <h1 class= "carousel-title animated pulse">Need Legal Assistance?</h1>
                <div class="banner-content animated slideInLeft">
                  <p class= "carousel-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                <a href="contact-us.php" class="btn btn-info hvr-grow-shadow" role="button">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
              </div>
          </div>
          <div class="col-md-6">
            <div class="image-holder">
              <img class="carousel-img animated slideInRight" src="images/attorney.png" alt="">
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

   		<div class="section-content ">
   			<div class="row">
   				<div class="col-xs-12 col-sm-4 col-md-4">
   					<div class="hovereffect image-holder-prac">
              <img src="images/area1.png" class="img-responsive">

              <a href="area-of-practice.php">
                <div class="icon-bg icon-injured"></div>
                <div class="overlay">
                  <h4>PERSONAL INJURY</h4>
                </div>
              </a>
            </div>

   				</div>
   				<div class="col-xs-12 col-sm-4 col-md-4">
   					<div class="hovereffect image-holder-prac">
              <img src="images/area1.png" class="img-responsive">
              <a href="area-of-practice.php">
                <div class="icon-bg icon-court"></div>
                  <div class="overlay">
                  <a href="area-of-practice.php"><h4>CRIMINAL LAW</h4></a>
                </div>
              </a>
            </div>
   				</div>
   				<div class="col-xs-12 col-sm-4 col-md-4">
   					<div class="hovereffect image-holder-prac">
              <img src="images/area1.png" class="img-responsive">
              <a href="area-of-practice.php">
                <div class="icon-bg icon-family"></div>
                  <div class="overlay">
                  <a href="area-of-practice.php"><h4> FAMILY LAW</h4></a>
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
   				<div class="col-md-6">
   					<div class="sec-image-holder">
   						<img src="images/welc-img.png">
   					</div>
   				</div>
   				<div class="col-md-6 left-padd-5">
   					<div class="section-subtitle">
   						<h3>Most Trusted Firm with successful cases</h3>
   					</div>
   					<div class="section-desc">
   						<p>
   							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
   						</p>
   						<a class="btn btn-default btn-about btn-aboutc icon-arrow-right" href="history.php" role="button">About Us   <!--  <i class="fa fa-long-arrow-right"></i> -->
              </a>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>

<?php include ('post-section.php'); ?>
<?php include ('footer.php'); ?>