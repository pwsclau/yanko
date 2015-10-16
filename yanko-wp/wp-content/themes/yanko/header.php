<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	 <title>Yanko</title>

	<!-- <meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> -->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand large" href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>

        <a href="index.php" class="navbar-brand mini"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" alt=""></a>
      </div>

      <ul class ="nav navbar-nav navbar-right upper-nav">
        <li>
          <form role="search" method="get" class="search-form" >
              <label>
                <i class="icon icon-search"></i> 
                      <span class="search-tag">
                        Search
                      </span>
                       <input type="search" 
                      class="search-field"  
                      value="">
                      
              </label>
              <input type="submit" class="search-submit" value="Search"> 
            </form>
        </li>
          <li><a href="#">T: 403.262.0262</a></li>
          <li><a href="#">F: 403.204.0284</a></li>
        </ul>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-list" id="header-menu">

         <?php 
        wp_nav_menu( array(
                'menu'              => 'main-menu',
                'theme_location' => 'primary-menu',
                'menu_class' => 'nav navbar-nav navbar-right lower-nav',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
        ?>


      <!--   <ul class="nav navbar-nav navbar-right lower-nav">
          <li><a href="index.php">HOME</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="history.php">HISTORY</a></li>
              <li><a href="vision-mission.php">VISION & MISSION</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AREAS OF PRACTICE<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="area-of-practice.php">PERSONAL INJURY</a></li>
              <li><a href="area-of-practice.php">CRIMINAL LAW</a></li>
              <li><a href="area-of-practice.php">FAMILY LAW</a></li>
            </ul>
          </li>
          <li><a href="lawyers.php">LAWYERS</a></li>
          <li class="hvr-grow-shadow"><a href="contact-us.php" class="btn btn-info btn-infoc icon-arrow-right" role="button">CONTACT US </a></li>
        </ul> -->
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
