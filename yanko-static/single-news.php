<?php include('header.php') ?>
	<div class="news-wrapper">
		<div class="container">
			<div class="news-img-holder">
				<img src="images/news-img.jpg" alt="">
			</div>
			<div class=" animated slideInUp news-details-holder">
				<h2 class="">Title</h2>
				<p>
					 David Yanko obtained his Law degree from the University of Saskatchewan. He then articled with the prestigious firm of Phelan O'Brien & Rutherford in Toronto and was admitted to the Law Society of Upper Canada graduating with Honours. David then returned west to Calgary and was admitted as a Lawyer with the Law Society of Alberta and later with the Law Society of British Columbia. In David's early years as a Lawyer he practiced Criminal Law. Over the years David Yanko conducted approximately six hundred trials from murder to robbery and assault charges, primarily in Alberta, but also in British Columbia and Saskatchewan. He has appeared in all levels of the court in Alberta and British Columbia from Provincial Court to the Court of Appeal on numerous occasions.

				</p>
				<div class="arrows-single">
					<a href="#next-post" role="button" class="btn btn-default arrows"><i class="fa fa-long-arrow-left"> </i></a>
	      			<a href="#next-post" role="button" class="btn btn-default arrows"><i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
		
	</div>
<?php include('footer.php') ?>


<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
