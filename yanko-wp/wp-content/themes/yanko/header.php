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

        <a class="navbar-brand large" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>

        <a href="index.php" class="navbar-brand mini"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" alt=""></a>
      </div>

      <ul class ="nav navbar-nav navbar-right upper-nav">
        <li>
          <form role="search" method="get" class="search-form" >
              <label>
                <input type="search" 
                      class="search-field"  
                      value="">
                      &nbsp;&nbsp;
                <i class="icon icon-search"></i> 
                <span class="search-tag">
                  &nbsp;Search
                </span>
              </label>
              <input type="submit" class="search-submit" value="Search"> 
            </form>
        </li>
        <li class="hide-li"><a href="#"><i class="fa fa-phone"></i>T: 403.262.0262</a></li>
        <li class="hide-li"><a href="#"><i class="fa fa-fax"></i>F: 403.204.0284</a></li>
        </ul>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-list" id="header-menu">

         <?php 
        wp_nav_menu( array(
          'menu'            => 'main-menu',
          'theme_location'  => 'primary-menu',
          'menu_class'      => 'nav navbar-nav navbar-right lower-nav',
          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
          'walker'          => new wp_bootstrap_navwalker()
          ));
        ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
