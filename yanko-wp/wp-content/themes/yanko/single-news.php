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

			<!-- <div class="news-img-holder">
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
			</div> -->
		</div>
		
	</div>
<?php get_footer(); ?>