<?php include ('header.php'); ?>   
   <!--  body-content -->

   <div class="banner banner-slider">
      <div id="banner-carousel" class="carousel slide" data-ride="carousel" data-interval= "false">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#banner-carousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/banner-bg.jpg">
            <div class="carousel-caption">
              <h1>NEED LEGAL ASSISTANCE?</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

              <div class="gap-30"></div>
              <button class = "hvr-grow-shadow">LEARN MORE <i class="fa fa-long-arrow-right"></i></button>
            
            </div>
          </div>
          <div class="item">
            <img src="images/banner-bg.jpg">
            <div class="carousel-caption">
              <h1>NEED LEGAL ASSISTANCE?</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

              <div class="gap-30"></div>
              <button class = "hvr-grow-shadow">LEARN MORE <i class="fa fa-long-arrow-right"></i></button>
            </div>
          </div>
          
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
   </div>


    <div class="areas-of-practice">
      <div class="container">
        <div class="heading">
          <h2>AREAS OF PRACTICE</h2>
          <div class="line-20"></div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-4 p-10">

            <div class="hovereffect">
              <img src="images/area1.png" class = "img-responsive">
              <div class="overlay">
                <h4> <a href="area_of_practice.php">PERSONAL INJURY</a> </h4>
                
              </div>
            </div>

            <!-- <div class="practice">
              <div class="prac-img-holder injury-img">
                <div class="icon-injured"></div>
              </div>
              <div class="prac-title">
                <h4>PERSONAL INJURY</h4>
              </div>
            </div> -->


          </div>

          <div class="col-sm-4 col-md-4 p-10">

            <div class="hovereffect">
              <img src="images/area2.png" class = "img-responsive">
              <div class="overlay">
                <h4>CRIMINAL LAW</h4>

              </div>
            </div>

            <!-- <div class="practice">
              <div class="prac-img-holder criminal-img">
                <div class="icon-court"></div>
              </div>
              <div class="prac-title">
                <h4>CRIMINAL LAW</h4>
              </div>
            </div> -->
          </div>
          <div class="col-md-4 col-sm-4 p-10">
            <div class="hovereffect">
              <img src="images/area3.png" class = "img-responsive">
              <div class="overlay">
                <h4>FAMILY LAW</h4>

              </div>
            </div>

            <!-- <div class="practice">
              <div class="prac-img-holder family-img">
                <div class="icon-family"></div>
              </div>
              <div class="prac-title">
                <h4>FAMILY LAW</h4>
              </div>
            </div> -->
          </div>
        </div>
      </div>
     </div>



   <div class="welcome">
    <div class="container">
        <div class="heading">
          <h2>WELCOME TO YANKO & POPOVIC - PROVIDING LEGAL HELP</h2>
          <div class="line-30"></div>
        </div>
        <div class="row">
          <div class=" col-sm-6 col-md-6">
            <div class="welc-img-holder">
              <img src="images/welc-img.png">
            </div>
            <!-- <img src="images/welc-img.png"> -->
          </div>

          <div class="col-sm -6col-md-6">
            <div class="welc-content">
              <div class="welc-title">
                <h3>Most Trusted Firm with successful cases</h3>
              </div>
              
              <div class="welc-desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

              </div>
              
              <div class="button-about">
                <button class = "btn-page">ABOUT US <i class="fa fa-long-arrow-right"></i></button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
   </div>

<?php include('post-section.php') ?>
<?php include('footer.php'); ?>