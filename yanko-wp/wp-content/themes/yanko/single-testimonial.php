<?php 
get_header(); ?>
	<div class="news-wrapper">
		<div class="container">
			Gwapa ko

			<?php 
				while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
				if(coments_open() }} get_comments_number()) :
					comments_template;
				endif;

				the_post_navigation(array(
						'next_text' =>  '<p>'.'<span class="screen-reader-text">' . __( 'Next service:', 'twentyfifteen' ) . '</span> ' .__( '%title').'</p>',
								'prev_text' =>	'<p>'.'<span class="screen-reader-text">' . __( 'Previous service:', 'twentyfifteen' ) . '</span> ' .__( '%title').'</p>',
					));
				endwhile;
			 ?>
		</div>
		
	</div>
<?php get_footer(); ?>