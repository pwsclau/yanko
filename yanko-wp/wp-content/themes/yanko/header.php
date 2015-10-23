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

        <?php if(of_get_option('branding', '')){?>
          <a class="navbar-brand large" href="/"><img src="<?php echo of_get_option('branding', '');  ?>"></a>
        <?php } ?>
        
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

        <?php if(of_get_option('telnumber', '')){?>
          <li class="hide-li">
            <a href="tel:<?php echo of_get_option('telnumber', '');  ?>" target="_blank">T: <?php echo of_get_option('telnumber', '');  ?></a>
          </li>
        <?php } ?>

        <?php if(of_get_option('fax_number', '')){?>
          <li class="hide-li">
            <a href="tel:<?php echo of_get_option('fax_number', '');  ?>" target="_blank">F: <?php echo of_get_option('fax_number', '');  ?></a>
          </li>
        <?php } ?>

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
